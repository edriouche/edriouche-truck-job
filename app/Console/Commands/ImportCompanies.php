<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class ImportCompanies extends Command
{
    protected $signature = 'app:import-companies {file : CSV file path}';

    protected $description = 'Import companies from a CSV file and prevent duplicates';

    public function handle(): int
    {
        $file = $this->argument('file');

        if (!file_exists($file)) {
            $this->error("File not found: {$file}");
            return self::FAILURE;
        }

        $handle = fopen($file, 'r');

        if ($handle === false) {
            $this->error('Cannot open CSV file.');
            return self::FAILURE;
        }

        $headers = fgetcsv($handle);

        if (!$headers) {
            fclose($handle);
            $this->error('CSV file is empty.');
            return self::FAILURE;
        }

        $headers = array_map('trim', $headers);

        $required = ['name', 'city', 'country'];

        foreach ($required as $column) {
            if (!in_array($column, $headers, true)) {
                fclose($handle);
                $this->error("Missing required column: {$column}");
                return self::FAILURE;
            }
        }

        $added = 0;
        $updated = 0;
        $skipped = 0;

        while (($row = fgetcsv($handle)) !== false) {
            if (count($row) !== count($headers)) {
                $skipped++;
                continue;
            }

            $data = array_combine($headers, $row);

            if (!$data || empty(trim($data['name'] ?? ''))) {
                $skipped++;
                continue;
            }

            $name = trim($data['name']);
            $city = trim($data['city'] ?? '');
            $country = trim($data['country'] ?? '');

            $company = Company::whereRaw('LOWER(name) = ?', [mb_strtolower($name)])
                ->whereRaw('LOWER(COALESCE(city, "")) = ?', [mb_strtolower($city)])
                ->whereRaw('LOWER(COALESCE(country, "")) = ?', [mb_strtolower($country)])
                ->first();

            $fields = [
                'name',
                'city',
                'country',
                'address',
                'phone',
                'email',
                'website',
                'transport_scope',
                'truck_types',
                'transport_description',
                'hiring_drivers',
                'training_available',
                'job_link',
                'verified',
                'last_verified_at',
                'notes',
            ];

            $clean = [];

            foreach ($fields as $field) {
                if (array_key_exists($field, $data) && $data[$field] !== '') {
                    $clean[$field] = trim($data[$field]);
                }
            }

            if ($company) {
                $company->update($clean);
                $updated++;
            } else {
                Company::create($clean);
                $added++;
            }
        }

        fclose($handle);

        $this->info('Import completed.');
        $this->info("Added: {$added}");
        $this->info("Updated: {$updated}");
        $this->info("Skipped: {$skipped}");

        return self::SUCCESS;
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_transport_category', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->foreignId('transport_category_id')->constrained()->cascadeOnDelete();

            $table->primary(['company_id', 'transport_category_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_transport_category');
    }
};

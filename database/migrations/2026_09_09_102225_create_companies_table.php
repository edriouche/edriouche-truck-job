<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('transport_scope')->nullable();
            $table->string('truck_types')->nullable();
            $table->text('transport_description')->nullable();
            $table->boolean('hiring_drivers')->default(false);
            $table->boolean('training_available')->default(false);
            $table->string('job_link')->nullable();
            $table->boolean('verified')->default(false);
            $table->date('last_verified_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

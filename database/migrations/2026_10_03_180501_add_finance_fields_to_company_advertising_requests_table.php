<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('company_advertising_requests', function (Blueprint $table) {
            $table->decimal('advertising_price', 10, 2)->default(0);
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->string('payment_status')->default('unpaid');
            $table->date('ad_start_date')->nullable();
            $table->date('ad_end_date')->nullable();
            $table->text('admin_notes')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_advertising_requests', function (Blueprint $table) {
            $table->dropColumn([
                'advertising_price',
                'amount_paid',
                'payment_status',
                'ad_start_date',
                'ad_end_date',
                'admin_notes',
            ]);
            $table->decimal('advertising_price', 10, 2)->default(0);
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->string('payment_status')->default('unpaid');
            $table->date('ad_start_date')->nullable();
            $table->date('ad_end_date')->nullable();
            $table->text('admin_notes')->nullable();
            //
        });
    }
};

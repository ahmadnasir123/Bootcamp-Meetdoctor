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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_id')->nullable()->index('fk_transaction_to_appointment');
            $table->string('fee_doctor')->nullable();
            $table->string('fee_hospotal')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('vat')->nullable();
            $table->string('total')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};

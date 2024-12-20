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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('transaction_id')->primary();
            $table->uuid('donation_id');
            $table->string('midtrans_order_id')->unique();
            $table->unsignedBigInteger('gross_amount');
            $table->enum('status',['pending','failed','completed'])->default('pending');
            $table->string('response_data');
            $table->foreign('donation_id')->references('donation_id')->on('donations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

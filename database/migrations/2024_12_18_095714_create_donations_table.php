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
        Schema::create('donations', function (Blueprint $table) {
            $table->uuid('donation_id')->primary(); // ID spesifik
            $table->uuid('user_id')->nullable();
            $table->uuid('campaign_id');
            $table->unsignedBigInteger('amount');
            $table->enum('status',['pending','failed','completed'])->default('pending');
            $table->foreign('user_id')->references('user_id')->on('users')->nullOnDelete();
            $table->foreign('campaign_id')->references('campaign_id')->on('campaigns')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};

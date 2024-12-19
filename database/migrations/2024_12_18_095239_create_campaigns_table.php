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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->uuid('campaign_id')->primary();
            $table->uuid('category_id')->nullable();
            $table->uuid('user_id'); // Pembuat campaign
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('target_amount');
            $table->unsignedBigInteger('collected_amount')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date'); 
            $table->string('image_path')->nullable(); 
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('categories')->nullOnDelete();
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};

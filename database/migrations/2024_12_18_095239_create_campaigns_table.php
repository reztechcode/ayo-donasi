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
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('target_amount');
            $table->unsignedBigInteger('collected_amount')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date'); 
            $table->string('image_path')->nullable(); 
            $table->boolean('status')->default(true); 
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('categories')->nullOnDelete();
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

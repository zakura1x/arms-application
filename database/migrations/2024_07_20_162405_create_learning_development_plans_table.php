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
        Schema::create('learning_development_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->boolean('is_approved')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('tos_id')->nullable();
            $table->timestamps();

            $table->foreign('tos_id')->references('id')->on('table_of_specifications')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_development_plans');
    }
};

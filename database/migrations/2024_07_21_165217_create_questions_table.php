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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->enum('type', ['practice', 'assessment']);
            $table->json('options')->nullable();
            $table->string('correct_answer');
            $table->boolean('is_approved')->default(false);
            $table->integer('points')->default(1);
            $table->enum('difficulty', ['easy', 'moderate', 'difficult']);
            $table->enum('taxonomy', ['remembering', 'understanding', 'applying', 'analyzing' , 'evaluating', 'creating']);


            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('topic_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};

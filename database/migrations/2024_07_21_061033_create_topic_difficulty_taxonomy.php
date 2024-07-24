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
        Schema::create('topic_difficulty_taxonomy', function (Blueprint $table) {
            $table->id();
            $table->enum('difficulty', ['easy', 'moderate', 'difficult']);
            $table->enum('taxonomy', ['remembering', 'understanding', 'applying', 'analyzing' , 'evaluating', 'creating']);
            $table->unsignedBigInteger('topic_id');
            $table->integer('item_count');

            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topic_difficulty_taxonomy');
    }
};

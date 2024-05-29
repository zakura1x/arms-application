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
        $table->unsignedBigInteger('faculty_id');
        $table->unsignedBigInteger('topic_id');
        $table->string('question_text');
        $table->text('options'); // You can use JSON for multiple options
        $table->string('correct_answer');
        $table->boolean('is_approved')->default(false);
        $table->timestamps();

        $table->foreign('faculty_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');
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

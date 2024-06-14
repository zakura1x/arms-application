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
            $table->json('options')->nullable();
            $table->string('correct_answer');
            $table->boolean('is_approved')->default(false);

            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('attachment_id')->nullable();
            $table->unsignedBigInteger('faculty_id');
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('attachment_id')->references('id')->on('attachments')->onDelete('set null');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
        
        
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

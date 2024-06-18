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
      Schema::create('assessment_by_topic', function (Blueprint $table) {
        $table->id();
        $table->foreignId('assessment_id')->constrained('assessments')->onDelete('cascade');
        $table->foreignId('module_id')->constrained('modules')->onDelete('cascade');
        $table->string('name');
        $table->string('difficulty'); // e.g., Easy, Medium, Hard
        $table->integer('number_of_items');
        $table->string('topic_covered');
        $table->json('questions'); // Store questions as JSON
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessment_by_topic');
    }
};

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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('topic_name');
            $table->text('topic_description')->nullable();
            $table->string('no_of_hours');
            $table->string('percentage');
            $table->string('no_of_items');
            $table->unsignedBigInteger('tos_id');
            $table->unsignedBigInteger('learning_development_plan_id');
            $table->timestamps();

            $table->foreign('learning_development_plan_id')->references('id')->on('learning_development_plans')->onDelete('cascade');
            $table->foreign('tos_id')->references('id')->on('table_of_specifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};

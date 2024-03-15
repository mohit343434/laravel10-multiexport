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
        Schema::create('course_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_uniqueID')->nullable();
            $table->string('course_uniqueID')->nullable();
            $table->string('category_name')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('task_uniqueID')->nullable();
            $table->string('media')->nullable();
            $table->string('duration')->nullable();
            $table->string('priority')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_lessons');
    }
};

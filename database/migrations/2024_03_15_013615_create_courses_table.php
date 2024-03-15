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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('course_uniqueID')->nullable();
            $table->unsignedInteger('corecategory_uniqueID')->nullable();
            $table->unsignedInteger('trainer_uniqueID')->nullable();
            $table->string('name')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('previewVideo')->nullable();
            $table->string('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('price')->nullable();
            $table->string('currency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

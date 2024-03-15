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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('task_uniqueID')->unsigned()->nullable();
            $table->string('category_name')->nullable();
            $table->string('task_name')->nullable();
            $table->string('task_type')->nullable();
            $table->string('difficultly_level')->nullable();
            $table->string('file_attached')->nullable();
            $table->string('link_url')->nullable();
            $table->string('skipped_time')->nullable();
            $table->string('question_type')->nullable();
            $table->string('point_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};

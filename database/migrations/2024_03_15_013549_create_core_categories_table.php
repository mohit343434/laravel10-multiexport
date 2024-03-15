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
        Schema::create('core_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('corecategory_uniqueID')->nullable();
            $table->string('name')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('color')->nullable();
            $table->string('categories_attached')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('core_categories');
    }
};
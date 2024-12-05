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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('title_en');
            $table->string('title_ru')->nullable();
            $table->string('title_uz')->nullable();
            $table->text('description_en');
            $table->text('description_ru')->nullable();
            $table->text('description_uz')->nullable();
            $table->string('video_url')->nullable();
            $table->string('video_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};

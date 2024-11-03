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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->json('project_images')->nullable(); // Store multiple images as JSON
            $table->string('cover_photo')->nullable(); // Store cover photo as a single image path
            $table->text('job_skills')->nullable(); // Store job skills as text (or JSON if preferred)
            $table->text('work_description')->nullable(); // Store the description of the work
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

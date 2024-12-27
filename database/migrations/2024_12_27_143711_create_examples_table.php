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
        Schema::create('examples', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Campo de texto simple
            $table->boolean('is_active')->default(false); // Toggle
            $table->boolean('accept_terms')->default(false); // Checkbox
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Radio
            $table->string('file_path')->nullable(); // File upload
            $table->text('description')->nullable(); // Rich editor
            $table->json('tags')->nullable(); // Tags input
            $table->json('key_values')->nullable(); // Key-value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examples');
    }
};

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
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID field
            $table->string('name'); // For storing the member's name
            $table->string('department'); // For storing the department name (faculty, staff, etc.)
            $table->string('image')->nullable(); // For storing the image filename (nullable in case no image is uploaded)
            $table->timestamps(); // Automatically adds 'created_at' and 'updated_at' fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members'); // Drops the 'members' table if it exists
    }
};

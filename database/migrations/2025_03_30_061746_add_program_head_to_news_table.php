<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('news', function (Blueprint $table) {
        $table->unsignedBigInteger('program_head')->nullable(); // Add program_head column

        // Foreign key constraint (if needed)
        $table->foreign('program_head')->references('id')->on('members')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropForeign(['program_head']); // Drop foreign key
        $table->dropColumn('program_head'); // Drop the column
    });
}

};

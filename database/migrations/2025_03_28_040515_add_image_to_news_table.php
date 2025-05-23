<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            if (!Schema::hasColumn('news', 'image')) { // Check if 'image' column already exists
                $table->string('image')->nullable(); // Add the image column
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            if (Schema::hasColumn('news', 'image')) { // Check if column exists before dropping
                $table->dropColumn('image'); // Drop the image column if rolling back
            }
        });
    }
}

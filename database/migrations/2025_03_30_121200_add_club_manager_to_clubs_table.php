<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClubManagerAndCoordinatorToClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Modify the 'clubs' table by adding both the club_manager and club_coordinator columns.
        Schema::table('clubs', function (Blueprint $table) {
            // Add club_manager column with a foreign key relation
            $table->unsignedBigInteger('club_manager')->nullable(); // club_manager can be nullable
            $table->foreign('club_manager')->references('id')->on('members')->onDelete('set null'); // Foreign key reference

            // Add club_coordinator column with a foreign key relation
            $table->unsignedBigInteger('club_coordinator')->nullable()->after('club_manager'); // club_coordinator can be nullable
            $table->foreign('club_coordinator')->references('id')->on('members')->onDelete('set null'); // Foreign key reference
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clubs', function (Blueprint $table) {
            // Drop foreign key constraints for both columns
            $table->dropForeign(['club_manager']);
            $table->dropForeign(['club_coordinator']);
            
            // Drop the club_manager and club_coordinator columns
            $table->dropColumn('club_manager');
            $table->dropColumn('club_coordinator');
        });
    }
}

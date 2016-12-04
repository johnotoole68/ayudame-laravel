<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgainForeignKeyTowns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('towns', function (Blueprint $table) {
            $table->foreign('provinces_id')->references('id')->on('provinces');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('towns', function (Blueprint $table) {
            $table->dropForeign('towns_provinces_id_foreign');
        });
    }
}

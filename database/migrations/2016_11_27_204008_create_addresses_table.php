<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->string('street');
            $table->string('zipCode');
            $table->timestamps();
            $table->integer('towns_id')->unsigned();
            $table->integer('provinces_id')->unsigned();

        });

        Schema::table('addresses', function ($table) {
            $table->foreign('towns_id')->references('id')->on('towns');
            $table->foreign('provinces_id')->references('id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.la
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}

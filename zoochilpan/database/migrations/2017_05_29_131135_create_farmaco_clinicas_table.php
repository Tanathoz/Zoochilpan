<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFarmacoClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmaco_clinicas', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('idProfilaxis');
            $table->integer('idFarmaco');
            $table->string('dosis');
            $table->string('frecuencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('farmaco_clinicas');
    }
}

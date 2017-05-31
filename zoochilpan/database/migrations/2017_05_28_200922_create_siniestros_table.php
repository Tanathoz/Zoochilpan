<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiniestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siniestros', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('idNecropsia');
            $table->text('medidaPreventiva');
            $table->string('nombreMedida');
            $table->string('apellidoPaternoMedida');
            $table->string('apellidoMaternoMedida');
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
        Schema::drop('siniestros');
    }
}

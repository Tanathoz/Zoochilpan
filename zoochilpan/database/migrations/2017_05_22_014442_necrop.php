<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Necrop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necropsias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('lugar');
            $table->date('fecha');
            $table->string('marcajeEjemplar');
            $table->time('hora');
            $table->text('antecedentes');
            $table->string('diagnosticoMuerte');
            $table->text('estadoFisico');
            $table->string('lesiones');
            $table->text('toracica');
            $table->text('abdominal');
            $table->text('muestras');
            $table->integer('idVeterinario');
            $table->integer('idEncargado');
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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHojaclinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojaclinicas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('lugar');
            $table->date('fecha');
            $table->text('antecedentes');
            $table->string('diagnostico');
            $table->string('tratamiento');
            $table->date('fechaAplicacion');
            $table->text('observaciones');
            $table->string('comentarios');
            $table->string('resultados');
            $table->string('marcajeEjemplar');
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
        Schema::drop('hojaclinicas');
    }
}

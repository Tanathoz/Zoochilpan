<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarForaneaProfilaxis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('hojaProfilaxis', function(Blueprint $table) {
                $table->increments('id');
                $table->string('marcajeEjemplar');
                $table->string('lugar');
                $table->date('fecha');
                $table->string('tratamiento');
                $table->date('fechaAplicacion');
                $table->text('observaciones');
                $table->text('comentarios');
                $table->integer('idVeterinario');
                $table->integer('idEncargado');
                $table->foreign('idVeterinario')->references('id')->on('veterinarios')->onDelete('cascade')->onUpdate('cascade');$table->foreign('idVeterinario')->references('id')->on('veterinarios');
                $table->foreign('idEncargado')->references('id')->on('veterinarios')->onDelete('cascade')->onUpdate('cascade');$table->foreign('idEncargado')->references('id')->on('veterinarios');
                $table->foreign('marcajeEjemplar')->references('marcaje')->on('ejemplares')->onDelete('cascade')->onUpdate('cascade');$table->foreign('marcajeEjemplar')->references('marcaje')->on('ejemplares');
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

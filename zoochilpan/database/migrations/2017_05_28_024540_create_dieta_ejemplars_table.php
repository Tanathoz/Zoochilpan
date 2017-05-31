<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDietaEjemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieta_ejemplars', function(Blueprint $table) {
            $table->string('marcajeEjemplar');
            $table->date('fechaCambio');
            $table->text('causaCambio');
            $table->string('cantidad');
            $table->text('alimento');
            $table->time('horario');
            $table->text('consideraciones');
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
        Schema::drop('dieta_ejemplars');
    }
}

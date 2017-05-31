<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tabladietasejemplares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('dietaejemplar', function(Blueprint $table) {
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
        Schema::drop('dietaejemplar');
    }
}

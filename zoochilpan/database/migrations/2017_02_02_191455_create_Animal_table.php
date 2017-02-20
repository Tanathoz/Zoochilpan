<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Animal', function($table)
        {
            $table->integer('id');

            $table->string('nombreCientifico');
            $table->string('nombreComun');
            $table->string('familia');
            $table->string('clase');
            $table->string('orden');
            $table->string('especie');
            $table->string('procedencia');
            $table->string('habitat');
            $table->string('gestacion');
            $table->string('camada');
            $table->string('longevidad');
            $table->string('sexo');
            $table->string('peso');
            $table->string('ubicacionGeografica');
            $table->string('Alimentacion');
            $table->string('datoCurioso');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['votes', 'avatar', 'location']);
        });
    }
}

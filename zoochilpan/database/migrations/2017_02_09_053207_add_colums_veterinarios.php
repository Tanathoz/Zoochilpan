<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsVeterinarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veterinarios', function(Blueprint $table) {

            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('sexo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('veterinarios', function(Blueprint $table) {

            $table->drop('apellidoPaterno');
            $table->drop('apellidoMaterno');
            $table->drop('sexo');

        });
    }
}

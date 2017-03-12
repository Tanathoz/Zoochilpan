<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposVeterinario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('veterinarios', function(Blueprint $table) {

            $table->string('especialidad');
            $table->string('areaEncargada');


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

            $table->drop('especialidad');
            $table->drop('areaEncargada');


        });
    }
}

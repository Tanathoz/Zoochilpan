<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BorrarColumsAnimal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Animal', function (Blueprint $table) {
            $table->dropColumn(['procedencia', 'sexo', 'datoCurioso']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Animal', function(Blueprint $table) {

            $table->string('procedencia');
            $table->string('sexo');
            $table->string('datoCurioso');

        });
    }
}

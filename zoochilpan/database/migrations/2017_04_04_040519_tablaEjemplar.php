<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEjemplar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejemplares', function(Blueprint $table) {
            $table->string('marcaje');
            $table->integer('idAnimal');
            $table->date('fechaNacimiento')->nullable();
            $table->date('fechaAlta')->nullable();
            $table->string('sexo')->nullable();
            $table->string('nombrePropio')->nullable();
            $table->foreign('idAnimal')->references('id')->on('animal')->onDelete('cascade')->onUpdate('cascade');$table->foreign('idAnimal')->references('id')->on('animal');
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
        Schema::table('ejemplres', function (Blueprint $table) {
            $table->dropColumn(['votes', 'avatar', 'location']);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Fluent;
class CreateEjemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('ejemplars', function(Blueprint $table) {
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
        Schema::drop('ejemplars');
    }
}

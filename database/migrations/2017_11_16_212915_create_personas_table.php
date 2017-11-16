<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->integer('Edad');
            $table->string('Direccion');
            $table->string('Email');
            

            $table->integer('Empleo_id')->unsigned()->nullable();
            $table->foreign('Empleo_id')->references('id')->on('Empleos');

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
        Schema::dropIfExists('personas');
    }
}

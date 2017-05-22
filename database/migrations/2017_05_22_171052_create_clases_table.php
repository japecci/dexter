<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->integer('carrera')->unsigned();
          $table->integer('semestre')->unsigned();
          $table->integer('total_horas')->unsigned();
          $table->integer('horas_teoricas')->unsigned();
          $table->integer('horas_practicas')->unsigned();
          $table->integer('horas_evaluaciones')->unsigned();
          $table->integer('frecuencia_semanal')->unsigned();
          $table->integer('profesor')->unsigned();
          $table->timestamps();
          $table->foreign('carrera')->references('id')->on('carreras');
          $table->foreign('profesor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}

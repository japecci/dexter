<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia')->unsigned();
            $table->string('titulo');
            $table->date('fecha');
            $table->string('actividad');
            $table->text('objetivo');
            $table->text('material');
            $table->text('montaje');
            $table->string('img_path_montaje');
            $table->text('metodo_experimental');
            $table->text('analisis_resultados');
            $table->timestamps();
            $table->foreign('materia')->references('id')->on('clases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicas');
    }
}

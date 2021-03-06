<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('tarifa');
            //$table->string('hora_apertura');
            //$table->string('hora_cierre');
            $table->String('horario');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('latitud');
            $table->string('longitud');
            //$table->string('celdas');
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
        Schema::dropIfExists('parkings');
    }
}

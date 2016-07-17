<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_vehicletype', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parking_id');
            $table->integer('vehicle_types_id');
            $table->integer('celdas');
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
        Schema::dropIfExists('parking_vehicletype');
    }
}

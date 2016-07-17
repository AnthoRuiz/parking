<?php

use Illuminate\Database\Seeder;
use Parking\ParkingVehicleType;

class ParkingVehicleTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParkingVehicleType::truncate();

        /**Parking 1**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '1',
            'vehicle_types_id' => '2',
            'celdas' => '3',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '1',
            'vehicle_types_id' => '3',
            'celdas' => '3',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '1',
            'vehicle_types_id' => '4',
            'celdas' => '5',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '1',
            'vehicle_types_id' => '5',
            'celdas' => '1',
        ]);

        /**Parking 2**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '2',
            'vehicle_types_id' => '2',
            'celdas' => '10',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '2',
            'vehicle_types_id' => '3',
            'celdas' => '3',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '2',
            'vehicle_types_id' => '5',
            'celdas' => '5',
        ]);

        /**Parking 3**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '3',
            'vehicle_types_id' => '1',
            'celdas' => '10',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '3',
            'vehicle_types_id' => '2',
            'celdas' => '10',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '3',
            'vehicle_types_id' => '3',
            'celdas' => '5',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '3',
            'vehicle_types_id' => '4',
            'celdas' => '5',
        ]);

        /**Parking 4**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '4',
            'vehicle_types_id' => '4',
            'celdas' => '3',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '4',
            'vehicle_types_id' => '5',
            'celdas' => '5',
        ]);

        /**Parking 5**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '5',
            'vehicle_types_id' => '2',
            'celdas' => '20',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '5',
            'vehicle_types_id' => '3',
            'celdas' => '10',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '5',
            'vehicle_types_id' => '4',
            'celdas' => '3',
        ]);

        /**Parking 6**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '6',
            'vehicle_types_id' => '1',
            'celdas' => '20',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '6',
            'vehicle_types_id' => '2',
            'celdas' => '5',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '6',
            'vehicle_types_id' => '3',
            'celdas' => '10',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '6',
            'vehicle_types_id' => '4',
            'celdas' => '5',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '6',
            'vehicle_types_id' => '5',
            'celdas' => '5',
        ]);

        /**Parking 7**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '7',
            'vehicle_types_id' => '1',
            'celdas' => '25',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '7',
            'vehicle_types_id' => '2',
            'celdas' => '3',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '7',
            'vehicle_types_id' => '3',
            'celdas' => '7',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '7',
            'vehicle_types_id' => '4',
            'celdas' => '3',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '7',
            'vehicle_types_id' => '5',
            'celdas' => '2',
        ]);

        /**Parking 8**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '8',
            'vehicle_types_id' => '2',
            'celdas' => '5',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '8',
            'vehicle_types_id' => '3',
            'celdas' => '9',
        ]);

        /**Parking 9**/
        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '9',
            'vehicle_types_id' => '4',
            'celdas' => '2',
        ]);

        factory(Parking\ParkingVehicleType::class)->create([
            'parking_id' => '9',
            'vehicle_types_id' => '5',
            'celdas' => '9',
        ]);

    }
}

/*            $table->integer('parking_id');
            $table->integer('vehicle_types_id');
            $table->integer('celdas');*/
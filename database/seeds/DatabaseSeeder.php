<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

        $this->call(TypeVehiclesTableSeeder::class);
        $this->call(ParkingnsTableSeeder::class);
        $this->call(ParkingVehicleTypeTableSeeder::class);

        Model::reguard();

    }
}

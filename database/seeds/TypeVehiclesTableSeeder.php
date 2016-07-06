<?php

use Illuminate\Database\Seeder;
use Parking\VehicleTypes;

class TypeVehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	VehicleTypes::truncate();

        factory(Parking\VehicleTypes::class)->create([
        	'nombre' => 'BICICLETA',
        	'img'    => 'http://www.bikestore.adivor.com.mx/imagenes/productos/main-04112014121610.jpg',

        ]);

        factory(Parking\VehicleTypes::class)->create([
        	'nombre' => 'MOTO',
        	'img'    => 'http://imagenesdemotosdelujo.com/wp-content/uploads/2015/06/5-Fotos-De-Motos-Para-Descargar-4.jpg',

        ]);

        factory(Parking\VehicleTypes::class)->create([
        	'nombre' => 'CARRO',
        	'img'    => 'http://imagenesdecarroslujosos.org/wp-content/uploads/2015/06/carros-lujosos-marcas-2.jpg',

        ]);

        factory(Parking\VehicleTypes::class)->create([
        	'nombre' => 'CAMIONETA',
        	'img'    => 'https://i.ytimg.com/vi/mSBilErHdUU/maxresdefault.jpg',

        ]);

        factory(Parking\VehicleTypes::class)->create([
        	'nombre' => 'PESADOS',
        	'img'    => 'http://talleractual.com/images/articles/pesados/pes-53-las-mejoras-en-los-camiones-01.jpg',

        ]);
    }
}

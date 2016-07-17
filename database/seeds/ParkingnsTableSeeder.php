<?php

use Illuminate\Database\Seeder;
use Parking\Parking;

class ParkingnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Parking::truncate();

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE COLMENA',
            'direccion' => 'CR43A No.1A SUR 29',
            'telefono' => '266 69 71',
            'horario' => 'Lunes a Viernes de 7:00 am a 7:00 pm. - Cierre de Taquilla: 7:00 pm. Sábados de 07:00 am a 3:00 pm - Cierre de Taquilla: 3:00 pm.',
            'latitud' => '6.202785',
            'longitud' => '-75.572068',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE EDIFICIO CENTRO DE TRABAJO',
            'direccion' => 'CR43A No.1A SUR 100',
            'telefono' => '268 47 11',
            'horario' => 'Lunes a Viernes de 7:00 am a 7:00 pm. - Cierre de Taquilla: 7:00 pm.',
            'latitud' => '6.202950',
            'longitud' => '-75.572440',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE CLINICA MEDELLIN POBLADO',
            'direccion' => 'Direcciòn: CL 07 No. 39 290',
            'telefono' => '312 62 54 - 268 93 60',
            'horario' => 'Lunes a Domingo -  24 Horas',
            'latitud' => '6.206351',
            'longitud' => '-75.568538',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE EL POBLADO',
            'direccion' => 'Direcciòn: CR 42 No. 08 51',
            'telefono' => '268 24 97',
            'horario' => 'Lunes a Domingo -  24 Horas',
            'latitud' => '6.208694',
            'longitud' => '-75.570316',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE EL MERCADO',
            'direccion' => 'Calle 24 # 48-28',
            'telefono' => '232 80 46',
            'horario' => 'Lunes a Viernes- 06:00am a 10:00 pm - Cierre de Taquilla: 10:00 pm',
            'latitud' => '6.226232',
            'longitud' => '-75.574866',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE LA PLAYA',
            'direccion' => 'CL 52No. 42 48',
            'telefono' => '239 19 68',
            'horario' => 'Lunes a Viernes de 6:00 am a 8:00 pm. - Cierre de Taquilla: 8:00 pm Sábados de 06:00 am a 2:00 pm - Cierre de Taquilla: 2:00 pm.',
            'latitud' => '6.247992',
            'longitud' => '-75.561536',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE EL PALO',
            'direccion' => 'CR 45 No. 49 68',
            'telefono' => '511 42 43',
            'horario' => 'Lunes a Viernes de 6:00 am a 8:00 pm. - Cierre de Taquilla: 8:00 pm Sábados de 06:00 am a 8:00 pm - Cierre de Taquilla: 8:00 pm.',
            'latitud' => '6.247037',
            'longitud' => '-75.564845',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE CLINICA ROSARIO',
            'direccion' => 'CR 42 No. 62 63',
            'telefono' => '284 23 22 - 284 23 24',
            'horario' => 'Lunes a Domingo - 24 Horas',
            'latitud' => '6.255295',
            'longitud' => '-75.556950',
        ]);

        factory(Parking::class)->create([
            'nombre' => 'AUTONORPE UNIVERSIDAD CATOLICA DEL ORIENTE',
            'direccion' => 'CR 46 No. 40B 50',
            'telefono' => '531 46 26',
            'horario' => 'Lunes a Viernes de 6:00 am a 9:30 pm. - Cierre de Taquilla: 9:30 pm. Sábados de 6:00 am a 6:30 pm - Cierre de Taquilla: 6:30 pm.',
            'latitud' => '6.240089',
            'longitud' => '-75.569937',
        ]);

    }
}
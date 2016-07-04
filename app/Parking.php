<?php

namespace Parking;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $table = 'parkings';

    protected $fillable = [
        'nombre', 'tarifa', 'hora_apertura', 'hora_cierre', 'direccion', 'telefono' , 'lat', 'long', 'tipo_vehiculos'
    ];

    public function typeVehicles()
    {
        return $this->belongsToMany('Parking\VehicleTypes','parking_vehicletype',
            'parking_id', 'tipo_vehiculo_id');
    }

}
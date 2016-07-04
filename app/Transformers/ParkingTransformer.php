<?php

namespace Parking\Transformers;


use League\Fractal\TransformerAbstract;
use Parking\Parking;

class ParkingTransformer extends TransformerAbstract
{
    public function transform(Parking $parking){
        return [
            'id' => $parking->id,
            'nombre'=> $parking->nombre,
            'tarifa'=> $parking->tarifa,
            'hora_apertura'=> $parking->hora_apertura,
            'hora_cierre'=> $parking->hora_cierre,
            'direccion'=> $parking->direccion,
            'telefono'=> $parking->telefono,
            'lat'=> $parking->lat,
            'long'=> $parking->long,
            'celdasDisponibles' => $parking->celdas,
            'tipoVehiculo'=> $parking->typeVehicles,
        ];
    }
}
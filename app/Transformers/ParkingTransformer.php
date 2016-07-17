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
            'horario'=> $parking->horario,
            //'hora_apertura'=> $parking->hora_apertura,
            //'hora_cierre'=> $parking->hora_cierre,
            'direccion'=> $parking->direccion,
            'telefono'=> $parking->telefono,
            'lat'=> $parking->latitud,
            'long'=> $parking->longitud,
            'tipoVehiculo'=> $parking->typeVehicles,
        ];
    }
}
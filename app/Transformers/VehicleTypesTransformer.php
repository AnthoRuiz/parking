<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 03/07/2016
 * Time: 07:55 PM
 */

namespace Parking\Transformers;


use League\Fractal\TransformerAbstract;
use Parking\VehicleTypes;

class VehicleTypesTransformer extends TransformerAbstract
{
    public function transform(VehicleTypes $vehicleTypes){

        return [
            'id' => $vehicleTypes->id,
            'nombre' => $vehicleTypes->nombre,
            'imagen' => $vehicleTypes->imagen,
        ];

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 03/07/2016
 * Time: 09:22 PM
 */

namespace Parking\Transformers;


use League\Fractal\TransformerAbstract;
use Parking\VehicleTypes;

class VehicleTypesParkingTransformer extends TransformerAbstract
{
    public function transform(VehicleTypes $vehicleTypes){

        return [
            'id' => $vehicleTypes->id,
            'nombre' => $vehicleTypes->nombre,
            'imagen' => $vehicleTypes->img,
            'parquederos' => $vehicleTypes->parkings,
        ];
    }

}
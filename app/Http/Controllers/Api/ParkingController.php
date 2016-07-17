<?php

namespace Parking\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Dingo\Api\Exception\UpdateResourceFailedException;
use Illuminate\Contracts\Validation\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Dingo\Api\Routing\Helpers;
use Parking\Http\Requests;
use Parking\Parking;
use Parking\Http\Controllers\Controller;
use Parking\Transformers\ParkingTransformer;
use Parking\VehicleTypes;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ParkingController extends Controller
{
    use Helpers;

    public function index()
    {
        return $this->response->collection(Parking::all(), new ParkingTransformer());
    }

    public function store(Requests\CreateParkingRequest $request)
    {
        try{
            $data = $request->all();
            
            $parking = new Parking();

            $parking->nombre = $data['nombre'];
            $parking->tarifa = $data['tarifa'];
            $parking->horario = $data['horario'];

            /*$horaApertura = new Carbon($data['horaApertura']);
            $parking->hora_apertura = $horaApertura->format("H:i:s");

            $horaCierre = new Carbon($data['horaCierre']);
            $parking->hora_cierre = $horaCierre->format("H:i:s");*/

            $parking->direccion = $data['direccion'];
            $parking->telefono = $data['telefono'];
            $parking->latitud = $data['lat'];
            $parking->longitud = $data['long'];


            foreach ($data['disponibleList'] as $disponible){

                    $parking->save();
                    $parking->typeVehicles()->attach($parking->id,['vehicle_types_id' => $disponible['tipoVehiculo'],
                                                     'celdas' => $disponible['celdas']]);
            }

            return $this->response->array(['message' =>'Creado', 'status' => '200']);

        }catch (ModelNotFoundException $e){
            return $this->response->array(['message' =>'Tipo Vehiculo No Encontrado', 'status' => '404']);
        }
    }
}

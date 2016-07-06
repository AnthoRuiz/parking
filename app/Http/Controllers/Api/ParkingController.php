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

            $horaApertura = new Carbon($data['horaApertura']);
            $parking->hora_apertura = $horaApertura->format("H:i:s");

            $horaCierre = new Carbon($data['horaCierre']);
            $parking->hora_cierre = $horaCierre->format("H:i:s");

            $parking->direccion = $data['direccion'];
            $parking->telefono = $data['telefono'];
            $parking->lat = $data['lat'];
            $parking->long = $data['long'];
            $parking->celdas = $data['celdasDisponibles'];
            
            $typeVehicles  = $data['tipoVehiculos'];
            $arrayTypeVehicles = explode(",", $typeVehicles);

            foreach ($arrayTypeVehicles as $type) {
                 VehicleTypes::where('id', $type)->firstOrFail();
            }

            foreach ($arrayTypeVehicles as $type){
                    $parking->save();
                    $parking->typeVehicles()->attach($type);
            }

            return $this->response->array(['message' =>'Creado', 'status' => '200']);

        }catch (ModelNotFoundException $e){
            return $this->response->array(['message' =>'Tipo Vehiculo No Encontrado', 'status' => '404']);
        }
    }
}

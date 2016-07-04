<?php

namespace Parking\Http\Controllers\Api;

//use Illuminate\Http\Request;

use Parking\Http\Requests;
use Parking\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Parking\Transformers\VehicleTypesParkingTransformer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Dingo\Api\Routing\Helpers;
use Parking\Parking;
use Parking\Transformers\VehicleTypesTransformer;
use Parking\VehicleTypes;

class VehicleTypesController extends Controller
{
    use Helpers;

    public function index()
    {
        return $this->response->paginator(VehicleTypes::paginate(5), new VehicleTypesTransformer());
    }

    public function findParkingByVehicle(Requests\FindParkinByVehiclegRequest $request)
    {
        try{
            $data = $request->all();
            $vehicleType = VehicleTypes::where('nombre', $data['tipoVehiculo'])->firstOrFail();
            //dd($vehicleType->parkings());
            if(!empty($vehicleType)){
                return $this->response->item($vehicleType, new VehicleTypesParkingTransformer());
            }
        }catch (ModelNotFoundException $e){
            return $this->response->array(['message' =>'Tipo Vehiculo Invalido', 'status' => '404']);
        }
    }


}

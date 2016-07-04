<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** Rutas para la aplicacion de parkings **/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
//'middleware => VerifyAccessKey'
    $api->group(['namespace' => 'Parking\Http\Controllers\Api'], function($api){

        /** PARKINGS */
        $api->get('parkings', 'ParkingController@index');
        $api->post('parkings', 'ParkingController@store');
        //$api->put('parkings', 'ParkingController@update');
        //$api->delete('parkings', 'ParkingController@destroy');

        /** TIPO DE VEHICULOS */
        $api->get('tipoVehiculos', 'VehicleTypesController@index');
        $api->post('buscarParkingPorVehiculo', 'VehicleTypesController@findParkingByVehicle');
    });

});

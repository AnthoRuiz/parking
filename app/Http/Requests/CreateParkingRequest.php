<?php

namespace Parking\Http\Requests;

use Dingo\Api\Http\FormRequest as Request;

class CreateParkingRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=> 'required|max:255',
            'tarifa'=> 'required',
            'horario'=> 'required',
            //'horaApertura'=> 'required',
            //'horaCierre'=> 'required',
            'direccion'=> 'required|max:255',
            'telefono'=> 'required|max:255',
            'lat'=> 'required|max:255',
            'long'=> 'required|max:255',
            'disponibleList'=> 'required|max:255',
        ];
    }
}

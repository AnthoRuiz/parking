<?php

namespace Parking;

use Illuminate\Database\Eloquent\Model;

class VehicleTypes extends Model
{
    protected $table = 'vehicletypes';

    protected $fillable = [
        'nombre'
    ];

    public function parkings()
    {
        return $this->belongsToMany('Parking\Parking','parking_vehicletype')
            ->withPivot('vehicle_types_id', 'celdas');

    }
}
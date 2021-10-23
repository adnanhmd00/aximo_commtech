<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecoveredVehicle extends Model
{
    use HasFactory;
    protected $table = 'recovery';
    protected $fillable = [
        'vehicle_type',
        'license_plate_no',
        'engine_no',
        'chassis_no',
        'country_whereRecovered',
        'city_whereRecovered',
        'police_station',
        'email',
        'mobile_no'
    ];
}

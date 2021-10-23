<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportStolen extends Model
{
    use HasFactory;
    protected $table = 'report';
    protected $fillable = [
        'country',
        'dealer',
        'license_plate_no',
        'engine_no',
        'chassis_no',
        'make',
        'model',
        'colour',
        'color_name',
        // 'country_whereRecovered',
        'city_whereStolen',
        'police_station',
        'police_crime_no',
        'email_id',
        'mobile_no'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleAccount extends Model
{
    use HasFactory;
    protected $table = 'vehicle_account';
    protected $fillable = [
        'contacted_by',
        'vehicle_motor',
        'country',
        'dealer',
        'license_plate_no',
        'engine_no',
        'chassis_no',
        'make',
        'model',
        'color_name',
        'color',
        'email_id',
        'mobile_no',
        'payment_id',
        'payment_status'
    ];
}

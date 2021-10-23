<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyChassis extends Model
{
    use HasFactory;
    protected $table = 'buy_chassis';
    protected $fillable = [
        'contacted_by',
        'vehicle_type',
        'vehicle',
        'chassis_no',
        'seller_contact',
        'seller_email',
        'buyer_contact',
        'buyer_email',
        'payment_id',
        'payment_status',
    ];
}

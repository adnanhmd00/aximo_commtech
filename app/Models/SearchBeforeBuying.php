<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchBeforeBuying extends Model
{
    use HasFactory;
    protected $table = 'buy_vehicle';
    protected $fillable = [
        'contacted_by',
        'vehicle_type',
        'vehicle_reg_no',
        'engine_no',
        'chassis_no',
        'seller_contact',
        'seller_email',
        'buyer_contact',
        'buyer_email',
        'payment_id',
        'payment_status'
    ];
}

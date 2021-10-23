<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyEngine extends Model
{
    use HasFactory;
    protected $table = 'buy_engine';
    protected $fillable = [
        'vehicle',
        'vehicle_type',
        'contacted_by',
        'engine_no',
        'seller_contact',
        'seller_email',
        'buyer_contact',
        'buyer_email'
    ];
}

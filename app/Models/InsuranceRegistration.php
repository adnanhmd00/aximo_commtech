<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceRegistration extends Model
{
    use HasFactory;
    protected $table = 'insurance_registration';
    protected $fillable = [
        'company_name',
        'country',
        'mobile_no',
        'email_id'
    ];
}

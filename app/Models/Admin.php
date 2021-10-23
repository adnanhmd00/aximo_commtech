<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'username',
        'email',
        'first_name',
        'last_name',
        'country',
        'about_me',
        'mobile',
        'role',
        'password',
    ];
}

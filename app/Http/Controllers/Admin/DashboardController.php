<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DealerRegistration;
use App\Models\InsuranceRegistration;
use App\Models\BuyEngine;

class DashboardController extends Controller
{
    public function index(){
        $data = DealerRegistration::all();
        $dealershipcount = $data->count();
        $insurance = InsuranceRegistration::all();
        $insurancecount = $insurance->count();
        $vehicle = BuyEngine::where('vehicle_motor','vehicle')->get();
        $vehiclecount = $vehicle->count();
        $motor = BuyEngine::where('vehicle_motor','motor')->get();
        $motorcount = $motor->count();
     return view('admin.index',compact('insurancecount','dealershipcount','vehiclecount','motorcount'));   
    }
}

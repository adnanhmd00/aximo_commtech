<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DealerRegistration;
use App\Models\InsuranceRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\BuyEngine;
use App\Models\BuyChassis;
use App\Models\ReportStolen;
use App\Models\VehicleAccount;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon;

class AdminController extends Controller
{
    public function login(Request $request){
        return view('admin.login');
    }

    public function onLogin(Request $request){
        
          if(Auth::attempt(["email" => $request->email, "password" => $request->password])){
            $user = Auth::user();
           // dd($user);
         
            $data =  [
            'api_token'  => $user->createToken("api_token")->accessToken,
            'token_type' => 'bearer',
            'data'       =>  $user,
            'status'     => 'success',
            ];

            $request->session()->put('admin',$data);   
           return redirect('admin/index');   
            // return redirect('/');
        }else{
            Session::put('Adminmessage','Please enter correct credenatials');
            return redirect('/admin');
    
    }
}
    

    public function logout(Request $request){
        auth()->logout();
        $request->session()->forget('admin');
        return redirect('/admin');
    }
    public function index(){
        $date = \Carbon\Carbon::today()->subDays(1);
        $data = DealerRegistration::all();
        $dealershipcount = $data->count();
        $insurance = InsuranceRegistration::all();
        $insurancecount = $insurance->count();
        $vehicle = VehicleAccount::where('vehicle_motor','vehicle')->get();
        $vehiclecount = $vehicle->count();
        $motor = VehicleAccount::where('vehicle_motor','motor')->get();
        $motorcount = $motor->count();
        $allVehicleToday  = VehicleAccount::where('created_at','>=',$date)->get();
        $vehicleToday = $allVehicleToday->where('vehicle_motor','vehicle')->count();
        $percentVehicle = $vehicleToday / $vehiclecount * 100;
        $totalvehiclepercent = ($vehiclecount - $vehicleToday) / $vehiclecount * 100; 

        $allMotorToday = VehicleAccount::where('created_at','>=',$date)->get();
        $motorToday = $allMotorToday->where('vehicle_motor','motor')->count();
        $percentMotor = $motorToday / $motorcount * 100;
        $totalmotorpercent = ($motorcount - $motorToday) / $motorcount * 100;

        $totalmotors = ReportStolen::where('vehicle_motor','motor')->get();
        $totalmotorscount = $totalmotors->count();
        $motorsaddedtoday = ReportStolen::where('created_at','>=',$date)->get();
        $motorsaddedtodaycount = $motorsaddedtoday->count();
        $percentmotorstolen = ($motorsaddedtodaycount / $totalmotorscount) * 100;
        $totalstolenmotorpercent = ($totalmotorscount - $motorsaddedtodaycount) / $totalmotorscount * 100;

        $totalengine = BuyEngine::all();
        $totalenginecount = $totalengine->count();
        $engineregisteredtoday = BuyEngine::where('created_at','>=',$date)->get();
        $engineregisteredtodaycount = $engineregisteredtoday->count();
        $enginepercent = ($engineregisteredtodaycount / $totalenginecount) * 100;
        $totalenginepercent = ($totalenginecount - $engineregisteredtodaycount) / $totalenginecount * 100;

        $totalchassis = BuyChassis::all();
        $totalchassiscount = $totalchassis->count();
        $chassisregisteredtoday = BuyChassis::where('created_at','>=',$date)->get();
        $chassisregisteredtodaycount = $chassisregisteredtoday->count();
        $chassispercent = ($chassisregisteredtodaycount / $totalchassiscount) * 100;
        $totalchassispercent = ($totalchassiscount - $chassisregisteredtodaycount) / $totalchassiscount * 100;

         
        
       
        return view('admin.index',compact('insurancecount','dealershipcount','vehiclecount','motorcount'))
        ->with('percentVehicle',json_encode($percentVehicle,JSON_NUMERIC_CHECK))
        ->with('totalvehiclepercent',json_encode($totalvehiclepercent,JSON_NUMERIC_CHECK))
        ->with('totalmotorpercent',json_encode($totalmotorpercent,JSON_NUMERIC_CHECK))
        ->with('percentMotor',json_encode($percentMotor,JSON_NUMERIC_CHECK))
        ->with('percentmotorstolen',json_encode($percentmotorstolen,JSON_NUMERIC_CHECK))
        ->with('totalstolenmotorpercent',json_encode($totalstolenmotorpercent,JSON_NUMERIC_CHECK))
        ->with('enginepercent',json_encode($enginepercent,JSON_NUMERIC_CHECK))
        ->with('totalenginepercent',json_encode($totalenginepercent,JSON_NUMERIC_CHECK))
        ->with('chassispercent',json_encode($chassispercent,JSON_NUMERIC_CHECK))
        ->with('totalchassispercent',json_encode($totalchassispercent,JSON_NUMERIC_CHECK));
    }
}

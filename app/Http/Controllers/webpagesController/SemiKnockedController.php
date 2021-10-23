<?php

namespace App\Http\Controllers\webpagesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyEngine;
use App\Models\BuyChassis;
use Illuminate\Support\Facades\Session;

class SemiKnockedController extends Controller
{
    public function onSemiKnockedMenu()
    {
        return view('webpages.semi-knocked-menu');
    }

    public function onBuyVehicleOrEngine(){
       // if(session('user')){
            return view('webpages.buy-vehicle-bike-engine');
      //  }else{
      //  return view('webpages.login');
      //  }
    }

    public function storeBuyVehicleEngine(Request $request){
        $exist_engine = BuyEngine::select('engine_no')->where('engine_no', $request->engine_no)->first();        
        if ($exist_engine) {
            Session::put('buy-engine','Engine Number Already Exist!');
            return redirect('/buy-vehicle-bike');
        }
        $data = new BuyEngine();
        $data->contacted_by = $request->input('contacted_by');
        $data->model = $request->input('model');
        $data->vehicle_motor = $request->input('vehicle');
        $data->vehicle_type=$request->input('vehicle_type');
        $data->engine_no=$request->input('engine_no');
        $data->seller_contact=$request->input('seller_contact');
        $data->seller_email=$request->input('seller_email');
        $data->buyer_contact=$request->input('buyer_contact');
        $data->buyer_email=$request->input('buyer_email');
        Session::put('semiknocked_engine',$data);
        return view('checkout.semiknocked_engine');
    }

    public function onBuyVehicleChassis(){
       // if(session('user')){
            return view('webpages.buy-vehicle-buy-chasis');
      //  }else{
      //  return view('webpages.login');
      //  }
    }

    public function storeBuyVehicleChassis(Request $request){
        $exist_chassis = BuyChassis::select('chassis_no')->where('chassis_no', $request->chassis_no)->first();        
        if ($exist_chassis) {
            Session::put('buy-chassis','Engine Number Already Exist!');
            return redirect('/buy-vehicle-chassis');
        }
        $data = new BuyChassis();
        $data->contacted_by = $request->input('contacted_by');
        $data->vehicle_type = $request->input('vehicle_type');
        $data->vehicle_motor = $request->input('vehicle');
        $data->chassis_no = $request->input('chassis_no');
        $data->seller_contact = $request->input('seller_contact');
        $data->seller_email =   $request->input('seller_email');
        $data->buyer_contact    =   $request->input('buyer_contact');
        $data->buyer_email  =   $request->input('buyer_email');
        Session::put('semiknocked_chassis',$data);
        return view('checkout.semiknocked_chassis');
    }
       
}

<?php

namespace App\Http\Controllers\webpagesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleAccount;
use App\Models\RecoveredVehicle;
use App\Models\SearchBeforeBuying;
use App\Models\ReportStolen;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use ClickSend\Configuration;
use ClickSend\Api\AccountApi;
use ClickSend\Api\SMSApi;
use ClickSend\Api\TransactionalEmailApi;
use Auth;

class UsersController extends Controller
{
    public function onCreateVehicle(){
       // if(session('user')){
            return view('webpages.create-vehicle-bike');
       // }else{
      //  return view('webpages.login');
      //  }
    }

    public function storeCreateVehicleAccount(Request $request){
        $exist_engine = VehicleAccount::select('engine_no')->where('engine_no', $request->engine_no)->first();
        $exist_chassis = VehicleAccount::select('chassis_no')->where('chassis_no', $request->chassis_no)->first();
        $exist_license = VehicleAccount::select('license_plate_no')->where('license_plate_no', $request->license_plate_no)->first();
        if ($exist_engine) {
            Session::put('engine','Engine Number Already Exist!');
            return redirect('/create-vehicle');
        }
        if ($exist_chassis) {
            session()->forget('engine');
            Session::put('chassis','Chassis Number Already Exist!');
            return redirect('/create-vehicle');
        }
        if ($exist_license) {

            Session::put('license','License Number Already Exist!');
            return redirect('/create-vehicle');
        }
        // payment code
        
        $data = new VehicleAccount();
            $data->contacted_by = $request->input('contacted_by');
            $data->vehicle_motor = $request->input('vehicle');
            $data->country = $request->input('country');
            $data->dealer = $request->input('dealer');
            $data->license_plate_no = $request->input('license_plate_no');
            $data->engine_no = $request->input('engine_no');
            $data->chassis_no = $request->input('chassis_no');
            $data->make = $request->input('make');
            $data->color_name = $request->input('color_name');
            $data->model = $request->input('model');
            $data->color = $request->input('color');
            $data->email_id = $request->input('email_id');
            $data->mobile_no = $request->input('mobile_no');
            // $data->save();
            Session::put('form_data',$data);
            return view('checkout.credit-card');
}

    public function onReportStolen(){
        if(session('user')){
            return view('webpages.report-stolen-vehicle');
        }else{
      //  return view('webpages.login');
          return view('webpages.report-stolen-vehicle');
        }
    }

    public function storeReportStolen(Request $request){
        $exist_engine = ReportStolen::select('engine_no')->where('engine_no', $request->engine_no)->first();
        $exist_chassis = ReportStolen::select('chassis_no')->where('chassis_no', $request->chassis_no)->first();
        $exist_license = ReportStolen::select('license_plate_no')->where('license_plate_no', $request->license_plate_no)->first();
        if ($exist_engine) {
            Session::put('report-engine','Engine Number Already Exist!');
            return redirect('/report-stolen');
        }
        if ($exist_chassis) {
            session()->forget('engine');
            Session::put('report-chassis','Chassis Number Already Exist!');
            return redirect('/report-stolen');
        }
        if ($exist_license) {

            Session::put('report-license','License Number Already Exist!');
            return redirect('/report-stolen');
        }
       
        $data = new ReportStolen();
        $data->vehicle_motor = $request->input('vehicle');
        $data->country= $request->input('country');
        $data->dealer = $request->input('dealer');
        $data->license_plate_no=$request->input('license_plate_no');
        $data->engine_no = $request->input('engine_no');
        $data->chassis_no = $request->input('chassis_no');
        $data->make = $request->input('make');
        $data->model = $request->input('model');
        $data->colour = $request->input('colour');
        $data->color_name= $request->input('color_name');
        $data->city_whereStolen = $request->input('city_whereStolen');
        $data->police_station = $request->input('police_station');
        $data->police_crime_no = $request->input('police_crime_no');
        $data->email_id = $request->input('email_id');
        $data->mobile_no = $request->input('mobile');
        // dd($data);
        $saveddata = $data->save();
        if($saveddata){
           Session::put('successreport','Your report has been registered with us!');
           return redirect('/report-stolen'); 
        }
    }

    public function updateRecoveredVehicle(Request $request){
        $exist_email = RecoveredVehicle::select('email')->where('email', $request->email)->first();
        $exist_engine = RecoveredVehicle::select('engine_no')->where('engine_no', $request->engine_no)->first();
        $exist_chassis = RecoveredVehicle::select('chassis_no')->where('chassis_no', $request->chassis_no)->first();
        $exist_plate = RecoveredVehicle::select('license_plate_no')->where('license_plate_no', $request->license_plate_no)->first();
        if ($exist_email) {
            Session::put('recover-email','Email Already Exist!');
            return redirect('/update-recovered');
        }
        if ($exist_engine) {
            Session::put('recover-engine','Engine Number Already Exist!');
            return redirect('/update-recovered');
        }
        if ($exist_chassis) {
            session()->forget('engine');
            Session::put('recover-chassis','Chassis Number Already Exist!');
            return redirect('/update-recovered');
        }
        if ($exist_plate) {

            Session::put('recover-license','Plate Number Already Exist!');
            return redirect('/update-recovered');
        }
        
            $data = new RecoveredVehicle();
            $data->vehicle_type = $request->input('vehicle_type');
            $data->license_plate_no = $request->input('license_plate_no');
            $data->engine_no = $request->input('engine_no');
            $data->chassis_no = $request->input('chassis_no');
            $data->country_whereRecovered = "Togo";
            $data->city_whereRecovered = $request->input('city_whereRecovered');
            $data->police_station = $request->input('police_station');
            $data->email = $request->input('email');
            $data->mobile_no = $request->input('mobile');
            $data->save();
            Session::put('recover-success','Record has been updated successfully!');
            return redirect('/update-recovered');
    }

    public function searchBeforeBuying(Request $request){
        $exist_email = SearchBeforeBuying::select('buyer_email')->where('buyer_email', $request->buyer_email)->first();
        $exist_engine = SearchBeforeBuying::select('engine_no')->where('engine_no', $request->engine_no)->first();
        $exist_chassis = SearchBeforeBuying::select('chassis_no')->where('chassis_no', $request->chassis_no)->first();
        
        if ($exist_email) {
            Session::put('search-email','Email Already Exist!');
            return redirect('/search-before-buying');
        }
        if ($exist_engine) {
            Session::put('search-engine','Engine Number Already Exist!');
            return redirect('/search-before-buying');
        }
        if ($exist_chassis) {
            session()->forget('engine');
            Session::put('search-chassis','Chassis Number Already Exist!');
            return redirect('/search-before-buying');
        }
        $data = new SearchBeforeBuying();
        $data->contacted_by = $request->input('contacted_by');
        $data->vehicle_type = $request->input('vehicle_type');
        $data->vehicle_reg_no = $request->input('vehicle_reg_no');
        $data->engine_no = $request->input('engine_no');
        $data->chassis_no = $request->input('chassis_no');
        $data->seller_contact = $request->input('seller_contact');
        $data->seller_email = $request->input('seller_email');
        $data->buyer_contact = $request->input('buyer_contact');
        $data->buyer_email = $request->input('buyer_email');
        // $data->save();
        Session::put('search_before',$data);
            return view('checkout.search-buying');
        // return redirect('/search-before-buying');
    }

    public function onUpdateRecovered(){
       // if(session('user')){
            return view('webpages.update-recovered');
      //  }else{
      //  return view('webpages.login');
      //  }
    }

    public function onSearchBeforeBuying(){
      //  if(session('user')){
            return view('webpages.search-before-buying');
      //  }else{
      //  return view('webpages.login');
      //  }
    }
}

<?php

namespace App\Http\Controllers\webpagesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DealerRegistration;
use App\Models\InsuranceRegistration;
use App\Models\VehicleOutstanding;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Hash;

class CarFinanceController extends Controller
{
    public function onCarFinance(){
        return view('webpages.car-finance-menu');
    }

    public function onDealershipRegistration(){
        return view('webpages.dealer-registration');
    }

    public function storeDealerRegistration(Request $request){
        $exist_company = DealerRegistration::select('company_name')->where('company_name', $request->company_name)->first();
        $exist_mobile = DealerRegistration::select('mobile_no')->where('mobile_no', $request->mobile_no)->first();
        $exist_email = DealerRegistration::select('email_id')->where('email_id', $request->email_id)->first();        
        if ($exist_company) {
            Session::put('dealer_company','Company Name Already Exist!');
            return redirect('/dealer-registration');
        }
        if ($exist_mobile) {
            session()->forget('dealer_company');
            Session::put('dealer_mobile','Mobile Number Already Exist!');
            return redirect('/dealer-registration');
        }
        if ($exist_email) {
            session()->forget('dealer_company');
            Session::put('dealer_email','Email ID Already Exist!');
            return redirect('/dealer-registration');
        }

        $data = new User();
        $data->name = $request->input('company_name');
        $data->country = $request->input('country');
        $data->mobile = $request->input('mobile');
        $data->email =   $request->input('email_id');
        $data->role_id = '4';
        $data->password = Hash::make($request->input('password'));
        Session::put('dealership_payment',$data);
        return view('checkout.dealership');
    }

    public function onInsuranceReg(){
        return view('webpages.insurance-reg');
        
    }

    public function insuranceRegistration(Request $request){
        $exist_company = InsuranceRegistration::select('company_name')->where('company_name', $request->company_name)->first();
        $exist_mobile = InsuranceRegistration::select('mobile_no')->where('mobile_no', $request->mobile_no)->first();
        $exist_email = InsuranceRegistration::select('email_id')->where('email_id', $request->email_id)->first();        
        if ($exist_company) {
            Session::put('insurance_company','Company Name Already Exist!');
            return redirect('/insurance-reg');
        }
        if ($exist_mobile) {
            session()->forget('insurance_mobile');
            Session::put('insurance_mobile','Mobile Number Already Exist!');
            return redirect('/insurance-reg');
        }
        if ($exist_email) {
            session()->forget('insurance_email');
            Session::put('insurance_email','Email ID Already Exist!');
            return redirect('/insurance-reg');
        }
        
        $data = new User();
        $data->name = $request->input('company_name');
        $data->country = $request->input('country');
        $data->mobile = $request->input('mobile');
        $data->email =   $request->input('email_id');
        $data->role_id = '5';
        $data->password = Hash::make($request->input('password'));
        $data->save();
            // dd($user);
        return redirect('insurance-reg');
    }

    public function onVehicleOutstanding(){
        return view('webpages.vehicle-motor-outstanding');
    }

    public function storeVehicleOutstanding(Request $request){
        $exist_chassis = VehicleOutstanding::select('chassis_no')->where('chassis_no', $request->chassis_no)->first();
        $exist_engine = VehicleOutstanding::select('engine_no')->where('engine_no', $request->engine_no)->first();
        $exist_license = VehicleOutstanding::select('license_plate_no')->where('license_plate_no', $request->license_plate_no)->first();

        if ($exist_chassis) {
            Session::put('out_chassis','Chassis Number Already Exist!');
            return redirect('/vehicle-motor-outstanding');
        }
        if ($exist_engine) {
            session()->forget('out_chassis');
            Session::put('out_engine','Engine Number Already Exist!');
            return redirect('/vehicle-motor-outstanding');
        }
        if ($exist_license) {
            session()->forget('out_chassis');
            Session::put('out_license','Plate Number Already Exist!');
            return redirect('/vehicle-motor-outstanding');
        }
        
        $data = new VehicleOutstanding();
        $data->hp_company_name = $request->input('hp_company_name');
        $data->country = $request->input('country');
        $data->make = $request->input('make');
        $data->model = $request->input('model');
        $data->license_plate_no = $request->input('license_plate_no');
        $data->chassis_no = $request->input('chassis_no');
        $data->engine_no = $request->input('engine_no');
        $data->contract_startdate = $request->input('contract_startdate');
        $data->contract_enddate = $request->input('contract_enddate');
        $data->mobile_no = $request->input('mobile_no');
        $data->email_id = $request->input('email_id');
        $data->save();
            // dd($user);
        return redirect('vehicle-motor-outstanding');

    }
}

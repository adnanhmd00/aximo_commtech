<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleAccount;
use DataTables;

class CreateVehicleController extends Controller
{
    public function index(){
        $data = VehicleAccount::all();
        return view('admin.create-vehicle-bike-account',['data'=>$data]);
    }

    public function vehicleDataTable(Request $request){
        $data = VehicleAccount::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('country',function($data){
                return $data->country;
            })
            ->editColumn('dealer',function($data){
                return $data->dealer;
            })
            ->editColumn('license',function($data){
                return $data->license_plate_no;
            })
            ->editColumn('engine',function($data){
                return $data->engine_no;
            })
            ->editColumn('chassis',function($data){
                return $data->chassis_no;
            })
            ->editColumn('make',function($data){
                return $data->make;
            })
            ->editColumn('model',function($data){
                return $data->model;
            })
            ->editColumn('color',function($data){
                return $data->color_name;
            })
            ->editColumn('email',function($data){
                return $data->email_id;
            })
            ->editColumn('mobile',function($data){
                return $data->mobile_no;
            })
            ->editColumn('action',function($data){
                $deleteVehicle=url('admin/delete_vehicle',array('id'=>$data->id));
                return '<a onclick="editcreatevehicle('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editcreatevehicle"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteVehicle . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function deleteVehicle($id){
        $data = VehicleAccount::find($id);
        $del = $data->delete();
        return redirect('admin/create_vehicle');
    }
    public function editcreatevehicle($id){
        $data = VehicleAccount::find($id);
        return json_encode($data);
    }
    public function updateCreateVehicle(Request $request){
        $data = VehicleAccount::find($request->id);
        $data->country=$request->input('country');
        $data->dealer = $request->input('dealer');
        $data->license_plate_no=$request->input('license_plate_no');
        $data->engine_no=$request->input('engine_no');
        $data->chassis_no=$request->input('chassis_no');
        $data->make=$request->input('make');
        $data->model=$request->input('model');
        $data->color_name=$request->input('color_name');
        $data->email_id=$request->input('email_id');
        $data->mobile_no=$request->input('mobile_no');
        $data->save();
        return redirect('admin/create_vehicle');
    }
}

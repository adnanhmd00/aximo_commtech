<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecoveredVehicle;
use DataTables;

class UpdateRecoveredController extends Controller
{
    public function index(){
        $data = RecoveredVehicle::all();
        return view('admin.update-recovered-vehicle-bike',['data'=>$data]);
    }
    public function updateDataTable(Request $request){
        $data = RecoveredVehicle::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('vehicle',function($data){
                return $data->vehicle_type;
            })
            ->editColumn('plate_no',function($data){
                return $data->license_plate_no;
            })
            ->editColumn('engine',function($data){
                return $data->engine_no;
            })
            ->editColumn('chassis',function($data){
                return $data->chassis_no;
            })
            ->editColumn('recovered_city',function($data){
                return $data->city_whereRecovered;
            })
            ->editColumn('police',function($data){
                return $data->police_station;
            })
            ->editColumn('email',function($data){
                return $data->email;
            })
            ->editColumn('mobile',function($data){
                return $data->mobile_no;
            })
            ->editColumn('action',function($data){
                $deleteUpdate=url('admin/delete_update',array('id'=>$data->id));
                return '<a onclick="editupdaterecovered('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editupdaterecovered"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteUpdate . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }

    }
    public function deleteUpdate($id){
        $data = RecoveredVehicle::find($id);
        $del = $data->delete();
        return redirect('admin/update_recovered');
    }
    public function editupdaterecovered($id){
        $data = RecoveredVehicle::find($id);
        return json_encode($data);
    }
    public function updateUpdaterecovered(Request $request){
        $data = RecoveredVehicle::find($request->id);
        $data->vehicle_type=$request->input('vehicle_type');
        $data->license_plate_no=$request->input('license_plate_no');
        $data->engine_no=$request->input('engine_no');
        $data->chassis_no=$request->input('chassis_no');
        $data->city_whereRecovered = $request->input('city_whereRecovered');
        $data->police_station = $request->input('police_station');
        $data->email=$request->input('email');
        $data->mobile_no=$request->input('mobile_no');
        $data->save();
        return redirect('admin/update_recovered');
    }
}

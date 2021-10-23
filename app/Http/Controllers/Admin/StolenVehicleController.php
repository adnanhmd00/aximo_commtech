<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportStolen;
use DataTables;

class StolenVehicleController extends Controller
{
    public function index(){
        $data = ReportStolen::all();
        return view('admin.report-stolen-vehicle-1',['data'=>$data]);
    }

    public function stolenDataTable(Request $request){
        $data = ReportStolen::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
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
                return $data->color;
            })
            ->editColumn('email',function($data){
                return $data->email_id;
            })
            ->editColumn('mobile',function($data){
                return $data->mobile_no;
            })
            ->editColumn('where_stolen',function($data){
                return $data->city_whereStolen;
            })
            ->editColumn('country',function($data){
               return $data->country;
            })
            ->editColumn('police_name',function($data){
                return $data->police_station;
             })
             ->editColumn('police_crime',function($data){
                return $data->police_crime_no;
             })
            ->editColumn('action',function($data){
                $deleteStolen=url('admin/delete_stolen',array('id'=>$data->id));
                return '<a onclick="editstolen('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editstolen"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteStolen . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function deleteStolen($id){
        $data = ReportStolen::find($id);
        $del = $data->delete();
        return redirect('admin/stolen_vehicle');
    }

    public function editstolen($id){
        $data = ReportStolen::find($id);
        return json_encode($data);
    }
    public function updateStolen(Request $request){
        $data = ReportStolen::find($request->id);
        $data->dealer = $request->input('dealer');
        $data->license_plate_no=$request->input('license_plate_no');
        $data->engine_no=$request->input('engine_no');
        $data->chassis_no=$request->input('chassis_no');
        $data->make=$request->input('make');
        $data->model=$request->input('model');
        $data->color_name=$request->input('color_name');
        $data->email_id=$request->input('email_id');
        $data->mobile_no=$request->input('mobile_no');
        $data->city_whereStolen=$request->input('city_whereStolen');
        $data->country=$request->input('country');
        $data->police_station=$request->input('police_station');
        $data->police_crime_no=$request->input('police_crime_no');
        
        $data->save();
        return redirect('admin/stolen_vehicle');
    }

}

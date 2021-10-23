<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleOutstanding;
use DataTables;

class OutstandingController extends Controller
{
    public function index(){
        $data = VehicleOutstanding::all();
        return view('admin.outstanding-finance-check',['data'=>$data]);
    }

    public function financeDataTable(Request $request){
        $data = VehicleOutstanding::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('name',function($data){
                return $data->hp_company_name;
            })
            ->editColumn('country',function($data){
                return $data->country;
            })
            ->editColumn('make',function($data){
                return $data->make;
            })
            ->editColumn('model',function($data){
                return $data->model;
            })
            ->editColumn('plate_number',function($data){
                return $data->license_plate_no;
            })
            ->editColumn('chassis',function($data){
                return $data->chassis_no;
            })
            ->editColumn('engine',function($data){
                return $data->engine_no;
            })
            ->editColumn('contract_start',function($data){
                return $data->contract_startdate;
            })
            ->editColumn('contract_end',function($data){
                return $data->contract_enddate;
            })
            ->editColumn('mobile',function($data){
                return $data->mobile_no;
            })
            ->editColumn('email',function($data){
               return $data->email_id;
            })
            ->editColumn('action',function($data){
                $deleteFinance=url('admin/delete_finance',array('id'=>$data->id));
                return '<a onclick="editfinance('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editfinance"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteFinance . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function deleteFinance($id){
        $data = VehicleOutstanding::find($id);
        $del = $data->delete();
        return redirect('admin/outstanding');
    }
    public function editfinance($id){
        $data = VehicleOutstanding::find($id);
        return json_encode($data);
    }
    public function updateFinance(Request $request){
        $data = VehicleOutstanding::find($request->id);
        $data->hp_company_name=$request->input('company_name');
        $data->country=$request->input('country');
        $data->make=$request->input('make');
        $data->model=$request->input('model');
        $data->license_plate_no=$request->input('license_plate_no');
        $data->chassis_no=$request->input('chassis_no');
        $data->engine_no=$request->input('engine_no');
        $data->contract_startdate=$request->input('contract_startdate');
        $data->contract_enddate=$request->input('contract_enddate');
        $data->mobile_no=$request->input('mobile_no');
        $data->email_id=$request->input('email_id');
        
        $data->save();
        return redirect('admin/outstanding');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyEngine;
use DataTables;

class BuyEngineController extends Controller
{
    public function index(){
        $data = BuyEngine::all();
        return view('admin.buy-vehicle-engine-1',['data'=>$data]);
    }
    public function buyVehicleDataTable(Request $request){
        $data = BuyEngine::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('vehicle',function($data){
                return $data->vehicle_type;
            })
            ->editColumn('engine',function($data){
                return $data->engine_no;
            })
            ->editColumn('seller_mobile',function($data){
                return $data->seller_contact;
            })
            ->editColumn('seller_email',function($data){
                return $data->seller_email;
            })
            ->editColumn('buyer_mobile',function($data){
                return $data->buyer_contact;
            })
            ->editColumn('buyer_email',function($data){
                return $data->buyer_email;
            })
            ->editColumn('action',function($data){
                $deleteBuyVehicle=url('admin/delete_buyvehicle',array('id'=>$data->id));
                return '<a onclick="editengine('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editengine"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteBuyVehicle . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }

    }
    public function deleteBuyVehicle($id){
        $data = BuyEngine::find($id);
        $del = $data->delete();
        return redirect('admin/buy_engine');
    }
    public function editengine($id){
        $data = BuyEngine::find($id);
        return json_encode($data);
    }
    public function updateEngine(Request $request){
        $data = BuyEngine::find($request->id);
        $data->vehicle_type=$request->input('vehicle_type');
        $data->engine_no=$request->input('engine_no');
        $data->seller_contact=$request->input('seller_contact');
        $data->seller_email=$request->input('seller_email');
        $data->buyer_contact = $request->input('buyer_contact');
        $data->buyer_email = $request->input('buyer_email');
        $data->save();
        return redirect('admin/buy_engine');
    }
}


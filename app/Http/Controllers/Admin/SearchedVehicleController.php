<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SearchBeforeBuying;
use DataTables;
class SearchedVehicleController extends Controller
{
    public function index(){
        $data = SearchBeforeBuying::all();
        return view('admin.searched-vehicle-before-buying',['data'=>$data]);
    }

    public function updateSearchedDataTable(Request $request){
        $data = SearchBeforeBuying::all();
        if($request->ajax()){
            \Log::info($data);
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('contacted_by',function($data){
                return $data->contacted_by;
            })
            ->editColumn('model',function($data){
                return $data->model;
            })
            ->editColumn('vehicle_type',function($data){
                return $data->vehicle_type;
            })
            ->editColumn('vehicle_reg_no',function($data){
                return $data->vehicle_reg_no;
            })
            ->editColumn('engine_no',function($data){
                return $data->engine_no;
            })
            ->editColumn('chassis_no',function($data){
                return $data->chassis_no;
            })
            ->editColumn('seller_contact',function($data){
                return $data->seller_contact;
            })
            ->editColumn('seller_email',function($data){
                return $data->seller_email;
            })
            ->editColumn('buyer_contact',function($data){
                return $data->buyer_contact;
            })
            ->editColumn('buyer_email',function($data){
                return $data->buyer_email;
            })
            ->editColumn('payment_id',function($data){
                return $data->payment_id;
            })
            ->editColumn('payment_status',function($data){
                return $data->payment_status;
            })
            ->editColumn('action',function($data){
                $deleteUpdate=url('admin/delete_searched',array('id'=>$data->id));
                return '<a onclick="edit_searched('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit_searched"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteUpdate . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }

    }

    public function deleteSearched($id){
        $data = SearchBeforeBuying::find($id);
        $del = $data->delete();
        return redirect('admin/searched_vehicle');
    }

    public function editSearched($id){
        $data = SearchBeforeBuying::find($id);
        \Log::info($data);
        return json_encode($data);
    }

    public function updateSearched(Request $request){
        $data = SearchBeforeBuying::find($request->id);
        $data->model=$request->input('model');
        $data->vehicle_type=$request->input('vehicle_type');
        $data->vehicle_reg_no=$request->input('vehicle_reg_no');
        $data->engine_no=$request->input('engine_no');
        $data->chassis_no = $request->input('chassis_no');
        $data->seller_contact = $request->input('seller_contact');
        $data->seller_email=$request->input('seller_email');
        $data->buyer_contact=$request->input('buyer_contact');
        $data->buyer_email=$request->input('buyer_email');
        $data->save();
        return redirect('admin/searched_vehicle');
    }
}

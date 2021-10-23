<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyChassis;
use DataTables;

class BuyChassisController extends Controller
{
    public function index(){
        $data = BuyChassis::all();
        return view('admin.buy-vehicle-bike-chasis-1',['data'=>$data]);
    }
    public function buyChassisDataTable(Request $request){
        $data = BuyChassis::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('vehicle',function($data){
                return $data->vehicle_type;
            })
            ->editColumn('chassis',function($data){
                return $data->chassis_no;
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
                $deleteBuyChassis=url('admin/delete_buychassis',array('id'=>$data->id));
                return '<a onclick="editchassis('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editchassis"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteBuyChassis . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }

    }
    public function deleteBuyChassis($id){
        $data = BuyChassis::find($id);
        $del = $data->delete();
        return redirect('admin/buy_chassis');
    }
    public function editchassis($id){
        $data = BuyChassis::find($id);
        return json_encode($data);
    }
    public function updateChassis(Request $request){
        $data = BuyChassis::find($request->id);
        $data->vehicle_type=$request->input('vehicle_type');
        $data->chassis_no=$request->input('chassis_no');
        $data->seller_contact=$request->input('seller_contact');
        $data->seller_email=$request->input('seller_email');
        $data->buyer_contact = $request->input('buyer_contact');
        $data->buyer_email = $request->input('buyer_email');
        $data->save();
        return redirect('admin/buy_chassis');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DealerRegistration;
use App\Models\User;
use DataTables;

class DealerController extends Controller
{
    public function dealerIndex(){
        $data = DealerRegistration::all();
        return view('admin.dealership-registration',['data'=>$data]);
    }

    public function dealerDataTable(Request $request){
        $data = DealerRegistration::all();
        
        if($request->ajax()){
            // $pass = $request->requestAttributes()['password'];
            // $plainpass = Crypt::decryptString($pass);
            
            
            // $pass = Crypt::decryptString($data->password);
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('name',function($data){
                return $data->company_name;
            })
            ->editColumn('country',function($data){
                return $data->country;
            })
            ->editColumn('mobile',function($data){
                return $data->mobile_no;
            })
            ->editColumn('email',function($data){
               return $data->email_id;
            })
            ->editColumn('action',function($data){
                $deleteDealer=url('admin/delete_dealer',array('id'=>$data->id));
                return '<a onclick="editdealer('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editdealer"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteDealer . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function editdealer($id){
        $data = DealerRegistration::find($id);
        return json_encode($data);
    }

    public function deleteDealer($id){
        $data = DealerRegistration::find($id);
        $del = $data->delete();
        return redirect('admin/dealer');
    }
    public function viewDealer(){
        return view('admin.edit-dealership');
    }

    public function updateDealer(Request $request){
        $data = DealerRegistration::find($request->id);
        $data->company_name=$request->input('company_name');
        $data->email_id=$request->input('email_id');
        $data->mobile_no=$request->input('mobile_no');
        $data->country=$request->input('country');
        $data->save();
        return redirect('admin/dealer');
    }
}


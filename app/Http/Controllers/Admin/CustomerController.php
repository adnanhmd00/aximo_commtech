<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Hash;

class CustomerController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.customers',['data'=>$data]);
    }
    public function customerDataTable(Request $request){
        $data = User::all();
        
        
        if($request->ajax()){

            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('country',function($data){
                return $data->country;
            })
            ->editColumn('name',function($data){
                return $data->name;
            })
            ->editColumn('email',function($data){
                return $data->email;
            })
            ->editColumn('mobile',function($data){
               return $data->mobile;
            })
            ->editColumn('action',function($data){
                $deleteCustomer=url('admin/delete_customer',array('id'=>$data->id));
                return '<a onclick="editcustomer('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editcustomer"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteCustomer . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function editCustomer($id){
        $data = User::find($id);
        return json_encode($data);
    }

    public function deleteCustomer($id){
        $data = User::find($id);
        $del = $data->delete();
        return redirect('admin/customer');
    }

    public function updateCustomer(Request $request){
        $data = User::find($request->id);
        $data->country=$request->input('country');
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->mobile=$request->input('mobile');
        $data->password = Hash::make($request->input('password'));
        $data->save();
        return redirect('admin/customer');
    }
}

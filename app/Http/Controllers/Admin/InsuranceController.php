<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InsuranceRegistration;
use DataTables;

class InsuranceController extends Controller
{
    public function index(){
        $data = InsuranceRegistration::all();
        return view('admin.insurance-registration',['data'=>$data]);
    }

    public function insuranceDataTable(Request $request){
        $data = InsuranceRegistration::all();
        
        if($request->ajax()){
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
                $deleteInsurance=url('admin/delete_dealer',array('id'=>$data->id));
                return '<a onclick="editinsurance('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editinsurance"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deleteInsurance . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function deleteInsurance($id){
        $data = InsuranceRegistration::find($id);
        $del = $data->delete();
        return redirect('admin/insurance');
    }
    public function editinsurance($id){
        $data = InsuranceRegistration::find($id);
        return json_encode($data);
    }
    public function updateInsurance(Request $request){
        $data = InsuranceRegistration::find($request->id);
        $data->company_name=$request->input('company_name');
        $data->email_id=$request->input('email_id');
        $data->mobile_no=$request->input('mobile_no');
        $data->country=$request->input('country');
        $data->save();
        return redirect('admin/insurance');
    }
}

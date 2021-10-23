<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use DataTables;

class EnquiryController extends Controller
{
    public function index(){
        return view('admin.enquiry');
    }

    public function contactdataTable(Request $request){
        $data = ContactUs::all();
        
        if($request->ajax()){
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('name',function($data){
                return $data->name;
            })
            ->editColumn('email',function($data){
                return $data->email_id;
            })
            ->editColumn('subject',function($data){
                return $data->subject;
            })
            ->editColumn('message',function($data){
                return $data->message;
            })
            ->editColumn('action',function($data){
                $deleteContact=url('admin/delete_contact',array('id'=>$data->id));
                return '
                <a onclick="delete_record('."'" . $deleteContact . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
            })
            ->make(true);
        }
    }

    public function deleteContact($id){
        $data = ContactUs::find($id);
        $del = $data->delete();
        return redirect('admin/enquiry');
    }

}

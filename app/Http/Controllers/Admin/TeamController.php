<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Models\User;
use App\Models\Admin;
use DataTables;
use Redirect;
use Hash;

class TeamController extends Controller
{
    public function index(){
        $data = User::all();
        return view('admin.team-member',['data'=>$data]);
    }
    public function teamdatatable(AddUserRequest $request){
        $data = Admin::all();
        
        if($request->ajax()){
            // $pass = $request->requestAttributes()['password'];
            // $plainpass = Crypt::decryptString($pass);
            
            
            // $pass = Crypt::decryptString($data->password);
            return Datatables::of($data)
            ->editColumn('id',function($data){
                return $data->id;
            })
            ->editColumn('name',function($data){
                return $data->first_name;
            })
            ->editColumn('mobile',function($data){
                return $data->mobile;
            })
            ->editColumn('email',function($data){
                return $data->email;
            })
            ->editColumn('role',function($data){
                if($data->role_id == 1){
                    return "SuperAdmin";
                }if($data->role_id == 2){
                    return "Admin";
                }if($data->role_id==3){
                    return "User";
                }
            })
            ->editColumn('action',function($data){
                $deletemember=url('admin/delete_member',array('id'=>$data->id));
                $return =  '<a onclick="editmember('.$data->id.')" rel="tooltip" data-original-title="Remove" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmember"><i class="fas fa-pencil-alt"></i></a>
                <a onclick="delete_record('."'" . $deletemember . "'".')" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
                ';
                return $return;
            })
            ->make(true);
        }
    }

    public function editmember($id){
        $data = Admin::find($id);
        return json_encode($data);
    }

    public function deletemember($id){
        $data = Admin::find($id);
        $del = $data->delete();
        return redirect('admin/team_member');
    }
    public function addTeam(){
        return view('admin.add-team-member');   
    }
    public function addUser(AddUserRequest $request){
        $input = $request->requestAttributes();
        $data = Admin::create($input);
        return redirect('admin/add_team_member');
    }

    public function viewTeam(){
        return view('admin.edit-team-member');
    }

    public function updateTeam(Request $request){
        $data = Admin::find($request->id);
        $data->first_name=$request->input('name');
        $data->email=$request->input('email');
        $data->password=Hash::make($request->input('password'));
        $data->mobile=$request->input('mobile');
        $data->role=$request->input('role');
        $data->save();
        return redirect('admin/team_index');
    }
}

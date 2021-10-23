<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
USE Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        $data = Auth::user();
        return view('admin.user-profile',['data'=>$data]);
    }
    public function updateProfile(Request $request){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/upload/image'), $imageName);
        
       
        $data = Auth::user();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->country = $request->input('country');
        $data->mobile = $request->input('mobile');
        $data->password = Hash::make($request->input('password'));
        $data->image = $imageName;
        $data->update();
        $request->session()->put('auth_user',$data);
        return redirect('admin/profile');
       
    }
    public function updateImage(Request $request){
        $data = Auth::user();
        $data->image = $request->input('image');
        $data->update();
        return redirect('admin/profile');
    }
}

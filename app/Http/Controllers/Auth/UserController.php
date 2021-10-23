<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUser;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Hash;
use GuzzleHttp\Client;
use ClickSend\Configuration;
use ClickSend\Api\AccountApi;
use ClickSend\Api\SMSApi;
use ClickSend\Api\TransactionalEmailApi;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(LoginRequest $request){
        if($request->email){
        if(Auth::attempt(["email" => $request->email, "password" => $request->password]) || Auth::attempt(["mobile" => $request->email, "password" => $request->password])){
            $user = Auth::user();
            $data =  [
            'api_token'  => $user->createToken("api_token")->accessToken,
            'token_type' => 'bearer',
            'data'       =>  $user,
            'status'     => 'success',
            ];

            $request->session()->put('user',$data);  
            // dd("success email login"); 
            Session::put('success','Login successfully!');  
            return redirect()->back();
            //return redirect('/');
        }
        else{
            Session::put('message','Please enter correct credenatials');
            return redirect('login');
         }
    }
}

    public function register(RegisterUser $request){
        $input = $request->requestAttributes();
        $country = $input['country'];
        $exist_email = User::select('email')->where('email', $input['email'])->first();
        if ($exist_email) {
            Session::put('exist_email','Email Already Exist!');
            return redirect('/signup');

        } else if ($input['password'] == '') {
            return response()->json(['status' => 'error', 'message' => 'Please enter password!']);
        }else {
                $user = new User;
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->mobile = $request->input('mobile');
                $user->country = $request->input('country');
                $user->role_id = 2;
                $user->password = Hash::make($request->input('password'));
                $user->save();
                // dd($user);
            }
            // $user = User::create($input);
            Auth::attempt(["email" => $request->email, "password" => $request->password]);
            $user = Auth::user();
           // dd($user);
         
            $data =  [
            'api_token'  => $user->createToken("api_token")->accessToken,
            'token_type' => 'bearer',
            'data'       =>  $user,
            'status'     => 'success',
            ];
            $request->session()->put('user',$data);   
            session()->forget('exist_email');  
            Session::put('registrationsuccess','Registration has been successfully done!');  
            return redirect('/');
            
    }

    
    public function logout(Request $request){
        $request->session()->forget('user');
        session()->forget('message');
        return redirect('/');
    }
    public function privacy(){
        return view('webpages.privacy-policy');
    }
    
    public function forgetPassword(){
        return view('webpages.forget-password');
    }

    public function forget_password(Request $request){
        $exist_email = User::select('email')->where('email', $request->email)->first();

        if (empty($exist_email)) {
            Session::put('exist_email','Email not found in database.');
            return redirect('/forget-password');

        }
        
        $length = 6;
        $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pass = substr(str_shuffle($str), 0, $length);

        $data = new User;
        $data = User::where("email", $request->input('email'))->first();     
        if($data){     
            $data->password = Hash::make($pass);
            $data->save();
        }
       // if($value){
        $config = Configuration::getDefaultConfiguration()
                      ->setUsername('operations@commtechsoft.com')
                      ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');

        $apiInstance = new TransactionalEmailApi(new Client(),$config);
        $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
        $email_recipient=new \ClickSend\Model\EmailRecipient();
        $email_recipient->setEmail($request->email);
        $email_recipient->setName($request->email);
        $email_from=new \ClickSend\Model\EmailFrom();
        $email_from->setEmailAddressId(17076);
        $email_from->setName("Commtechsoft");
        $attachment = new \ClickSend\Model\Attachment();
        $attachment->setContent("this is a test mail");
        $attachment->setType("text/plain");
        $attachment->setFilename("text.txt");
        $attachment->setDisposition("attachment");
        $attachment->setContentId("text");
        $email->setTo([$email_recipient]);
        $email->setFrom($email_from);
        $email->setSubject("Commtechsoft | Forget-Password");
        $email->setBody("Dear User, <br> Your new password is ". $pass . " ");
        
        try {
            $result = $apiInstance->emailSendPost($email);
        } catch (Exception $e) {
            echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
        }
                Session::put('forgetPassword','Password has been sent to your register email ID.'); 
                return view('webpages.forget-password');
       // }
        
    }
}
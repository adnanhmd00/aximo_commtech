<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
// use Session;
use Illuminate\Support\Facades\Session;
use App\Models\VehicleAccount;
use GuzzleHttp\Exception\GuzzleException;
use App\Models\SearchBeforeBuying;
use GuzzleHttp\Client;
use ClickSend\Configuration;
use ClickSend\Api\AccountApi;
use App\Models\BuyEngine;
use App\Models\BuyChassis;
use App\Models\ReportStolen;
use App\Models\User;
use ClickSend\Api\SMSApi;
use ClickSend\Api\TransactionalEmailApi;
use Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        return view('checkout.credit-card');
    }

    public function afterPayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        // Create a charge 
        $response = Stripe\Charge::create ([
                "amount" => 5 * 100,
                "currency" => "GBP",
                "source" => $request->stripeToken,
                "description" => "Making Payment for Vehicle/Bike Account." 
        ]);


        //create full refund by charge id
        // $response = Stripe\Refund::create ([
        //    'charge' => 'ch_3JQWt7GAmB7fDp3R1Ny19Bjj'
        // ]);
        if($response->toArray()['object'] == "charge"){
            $data = Session('form_data');
            $vehicle_motor = Session('form_data')->toArray()['vehicle_motor'];
            $country = Session('form_data')->toArray()['country'];
            $dealer = Session('form_data')->toArray()['dealer'];
            $license_plate_no = Session('form_data')->toArray()['license_plate_no'];
            $engine_no = Session('form_data')->toArray()['engine_no'];
            $chassis_no = Session('form_data')->toArray()['chassis_no'];
            $make = Session('form_data')->toArray()['make'];
            $color_name = Session('form_data')->toArray()['color_name'];
            $model = Session('form_data')->toArray()['model'];
            $color = Session('form_data')->toArray()['color'];
            $email_id = Session('form_data')->toArray()['email_id'];
            $payment_id = $response->toArray()['id'];
            $payment_status = $response->toArray()['status'];
            $mobile_no = Session('form_data')->toArray()['mobile_no'];
            $contacted_by = Session('form_data')->toArray()['contacted_by'];

            $ret = new VehicleAccount;
            $ret->vehicle_motor = $vehicle_motor;
            $ret->country = $country;
            $ret->dealer = $dealer;
            $ret->license_plate_no = $license_plate_no;
            $ret->engine_no = $engine_no;
            $ret->chassis_no = $chassis_no;
            $ret->make = $make;
            $ret->color_name = $color_name;
            $ret->model = $model;
            $ret->color = $color;
            $ret->email_id = $email_id;
            $ret->mobile_no = $mobile_no;
            $ret->contacted_by = $contacted_by;
            $ret->payment_id = $payment_id;
            $ret->payment_status = $payment_status;
            $ret->save();
        }
        if($response->toArray()['status'] == 'succeeded'){
            if($ret->save()){
                if($contacted_by == "SMS"){
                $config = Configuration::getDefaultConfiguration()
                ->setUsername('operations@commtechsoft.com')
                ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                $apiInstance = new SMSApi(new Client(), $config);
                $msg = new \ClickSend\Model\SmsMessage();
    
                $msg->setBody("Dear " . Auth::user()->name .", following details received, VIN/Chassis No. " . $chassis_no. " and Engine No. " .$engine_no. " .You can correct mistakes through the contact page." ); 
                $msg->setTo($mobile_no); 
                $msg->setSource("sdk");
                
                $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                $sms_messages->setMessages([$msg]);
                try {
                    $result = $apiInstance->smsSendPost($sms_messages);
                    // dd($result);
                    // print_r($result);
                } catch (Exception $e) {
                    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                }
                // Session::put('createVehicle','Data Saved SuccessFully');
                // return redirect('/checkout')->with('Saved Successfully!');
                return view('webpages.payment-success',['data'=>$response]);
            }
            if($contacted_by == "EMAIL"){
                $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
            $apiInstance = new TransactionalEmailApi(new Client(),$config);
            $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
            $email_recipient=new \ClickSend\Model\EmailRecipient();
            $email_recipient->setEmail($email_id);
            
            $email_recipient->setName(Auth::user()->name);
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
            $email->setSubject("Commtechsoft");
            $email->setBody("Dear " . Auth::user()->name . ", <br> Congratulations on the creation of the account. We have received the following <br>
            details on your service request:<br> Country: ". $country . "<br> Are you a dealer: " . $dealer . "<br> License Plate No.: "
            . $license_plate_no . "<br> Engine No: " . $engine_no . "<br> Chassis No.: " . $chassis_no . 
            "<br> Make:" . $make . "<br> Model:" . $model . "<br> Color:" . $color . "<br>
            Email Id: ". $email_id . "<br> Mobile:" . $mobile_no ."<br>(All information/details of the Vehicle or Motorbike imputed in the process of the <br>
            application to be included)<br><br> PLEASE DO NOT REPLY TO THIS MAIL:Supposed this detail is not accurate, you can<br>contact ushrough the contact form on the website. If we have reached you in error,<br>
            kindly forward the content of this Email to us through the contact form and delete the<br> 
            information from your Email please.<br>Regards<br>Commtechsoft Team");
            
            try {
                $result = $apiInstance->emailSendPost($email);
                //print_r($result);
               // return redirect('/checkout');
            } catch (Exception $e) {
                echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
            }
            Session::put('createVehicle','Data Saved SuccessFully');
                    // return redirect('/checkout')->with('Saved Successfully!');
                    return view('webpages.payment-success',['data'=>$response]);
            }
        }
            // return view('webpages.payment-success',['data'=>$response]);
        }else{
        return view('webpages.payment-cancel',['data'=>$response]);    
        }
           
       //$respomse obj if paid set to 1
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }

    //search before buying payment function
    public function searchBuyingPayment(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        // Create a charge 
        $response = Stripe\Charge::create ([
                "amount" => 6 * 100,
                "currency" => "GBP",
                "source" => $request->stripeToken,
                "description" => "Making Payment for Search before buying Vehicle/Bike." 
        ]);


        //create full refund by charge id
        // $response = Stripe\Refund::create ([
        //    'charge' => 'ch_3JQWt7GAmB7fDp3R1Ny19Bjj'
        // ]);
        if($response->toArray()['object'] == "charge"){
            $data = Session('search_before');
            $contacted_by = Session('search_before')->toArray()['contacted_by'];
            $vehicle_type = Session('search_before')->toArray()['vehicle_type'];
            $vehicle_reg_no = Session('search_before')->toArray()['vehicle_reg_no'];
            $engine_no = Session('search_before')->toArray()['engine_no'];
            $chassis_no = Session('search_before')->toArray()['chassis_no'];
            $seller_contact = Session('search_before')->toArray()['seller_contact'];
            $seller_email = Session('search_before')->toArray()['seller_email'];
            $buyer_contact = Session('search_before')->toArray()['buyer_contact'];
            $buyer_email = Session('search_before')->toArray()['buyer_email'];
            $payment_id = $response->toArray()['id'];
            $payment_status = $response->toArray()['status'];

            $ret = new SearchBeforeBuying;
            $ret->contacted_by = $contacted_by;
            $ret->vehicle_type = $vehicle_type;
            $ret->vehicle_reg_no = $vehicle_reg_no;
            $ret->engine_no = $engine_no;
            $ret->chassis_no = $chassis_no;
            $ret->seller_contact = $seller_contact;
            $ret->seller_email = $seller_email;
            $ret->buyer_contact = $buyer_contact;
            $ret->buyer_email = $buyer_email;
            $ret->payment_id = $payment_id;
            $ret->payment_status = $payment_status;
            $ret->save();
        }
        
        if($response->toArray()['status'] == 'succeeded'){
            if($ret->save()){
                if($contacted_by == "SMS"){
                    $exist = ReportStolen::where('chassis_no', $chassis_no)->first();
                    $exist_engine = ReportStolen::where('engine_no', $engine_no)->first();
                if($exist != null){
                    $exist_chassis = $exist->toArray()['chassis_no'];
                    // $exist_eng = $exist_engine->toArray()['engine_no'];
                    $exist_make = $exist->toArray()['make'];
                    $config = Configuration::getDefaultConfiguration()
                    ->setUsername('operations@commtechsoft.com')
                    ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                    $apiInstance = new SMSApi(new Client(), $config);
                    $msg = new \ClickSend\Model\SmsMessage();
        
                    $msg->setBody("Hi " . Auth::user()->name .", following details received<br>VIN/Chassis No. " . $exist_chassis. "<br>Make:" .$exist_make. "<br>Engine No. " .$engine_no. " <br>You can correct mistakes through the contact page." ); 
                    $msg->setTo($buyer_contact); 
                    $msg->setSource("sdk");
                    
                    $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                    $sms_messages->setMessages([$msg]);
                    try {
                        $result = $apiInstance->smsSendPost($sms_messages);
                        // dd($result);
                        // print_r($result);
                    } catch (Exception $e) {
                        echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                    }
                    // Session::put('createVehicle','Data Saved SuccessFully');
                    return view('webpages.payment-success',['data'=>$response]);
                }else{
                    $exist_chassis = $chassis_no;
            $exist_eng = $engine_no;
            $exist_make = "****";
                    $config = Configuration::getDefaultConfiguration()
                    ->setUsername('operations@commtechsoft.com')
                    ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                    $apiInstance = new SMSApi(new Client(), $config);
                    $msg = new \ClickSend\Model\SmsMessage();
        
                    $msg->setBody("Hi " . Auth::user()->name .", following details received<br>VIN/Chassis No. " . $chassis_no."<br>Engine No. " .$engine_no. " <br>has not been reported stolen." ); 
                    $msg->setTo($buyer_contact); 
                    $msg->setSource("sdk");
                    
                    $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                    $sms_messages->setMessages([$msg]);
                    try {
                        $result = $apiInstance->smsSendPost($sms_messages);
                        // dd($result);
                        // print_r($result);
                    } catch (Exception $e) {
                        echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                    }
                    // Session::put('createVehicle','Data Saved SuccessFully');
                    return view('webpages.payment-success',['data'=>$response]);
                }
                if($contacted_by == "EMAIL"){
                    $exist = ReportStolen::where('chassis_no', $chassis_no)->first();
                    $exist_engine = ReportStolen::where('engine_no', $engine_no)->first();
                if($exist != null){
                    $exist_chassis = $exist->toArray()['chassis_no'];
                    $exist_make = $exist->toArray()['make'];
                    $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
                    $apiInstance = new TransactionalEmailApi(new Client(),$config);
                    $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
                    $email_recipient=new \ClickSend\Model\EmailRecipient();
                    $email_recipient->setEmail($request->input('email_id'));
                    
                    $email_recipient->setName(Auth::user()->name);
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
                    $email->setSubject("Commtechsoft");
                    $email->setBody("Dear " . Auth::user()->name . ", <br> We have received the following details of your service request: <br>
                    (All information/details of the Vehicle or Motorbike as imputed on the website -<br>Make:" .$exist_make. ", VIN:" .$exist_chassis. ",Engine:" .$engine_no. ")
                    however, the details have been reported to us as stolen.<br><br><br>
                    PLEASE DO NOT REPLY TO THIS EMAIL: Supposed this detail is not accurate, you can<br>
                    contact us through the contact form on the website. If we have reached you in error,<br> 
                    kindly forward the content of this Email to us through the contact form and delete the<br> 
                    information from your Email please.<br>Regards<br>Commtechsoft Team");
            
                try {
                    $result = $apiInstance->emailSendPost($email);
                    // print_r($result);
                    return view('webpages.payment-success',['data'=>$response]);
                } catch (Exception $e) {
                    echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
                }
                Session::put('createVehicle','Data Saved SuccessFully');
                return view('webpages.payment-success',['data'=>$response]);
                }else{
                    $exist_chassis = $chassis_no;
            $exist_eng = $engine_no;
            $exist_make = "****";
                    $config = Configuration::getDefaultConfiguration()
                    ->setUsername('operations@commtechsoft.com')
                    ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');

              $apiInstance = new TransactionalEmailApi(new Client(),$config);
              $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
              $email_recipient=new \ClickSend\Model\EmailRecipient();
              $email_recipient->setEmail($request->input('email_id'));
              
              $email_recipient->setName(Auth::user()->name);
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
              $email->setSubject("Commtechsoft");
              $email->setBody("Dear " . Auth::user()->name . ", <br> We have received the following details of your service request: <br>
              (All information/details of the Vehicle or Motorbike as imputed on the website -<br>VIN:" .$chassis_no. ",Engine:" .$engine_no. ")
              however, the details has not been reported to us as stolen.<br><br><br>
              PLEASE DO NOT REPLY TO THIS EMAIL: Supposed this detail is not accurate, you can<br>
              contact us through the contact form on the website. If we have reached you in error,<br> 
              kindly forward the content of this Email to us through the contact form and delete the<br> 
              information from your Email please.<br>Regards<br>Commtechsoft Team");
      
          try {
              $result = $apiInstance->emailSendPost($email);
              // print_r($result);
              return view('webpages.payment-success',['data'=>$response]);
          } catch (Exception $e) {
              echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
          }
          Session::put('createVehicle','Data Saved SuccessFully');
          return view('webpages.payment-success',['data'=>$response]);
                }
            }
        }
            
        }
    }else{
        return view('webpages.payment-cancel',['data'=>$response]);    
        }
    }

    //Semi knocked engine
    public function semiKnockedEnginePayment(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        // Create a charge 
        $response = Stripe\Charge::create ([
                "amount" => 6 * 100,
                "currency" => "GBP",
                "source" => $request->stripeToken,
                "description" => "Making Payment for To Buy Vehicle or Bike Engine." 
        ]);

        if($response->toArray()['object'] == "charge"){
            $data = Session('semiknocked_engine');
            $contacted_by = Session('semiknocked_engine')->toArray()['contacted_by'];
            $vehicle_type = Session('semiknocked_engine')->toArray()['vehicle_type'];
            $vehicle_motor = Session('semiknocked_engine')->toArray()['vehicle_motor'];
            $engine_no = Session('semiknocked_engine')->toArray()['engine_no'];
            $seller_contact = Session('semiknocked_engine')->toArray()['seller_contact'];
            $seller_email = Session('semiknocked_engine')->toArray()['seller_contact'];
            $buyer_contact = Session('semiknocked_engine')->toArray()['buyer_contact'];
            $buyer_email = Session('semiknocked_engine')->toArray()['buyer_email'];
            $payment_id = $response->toArray()['id'];
            $payment_status = $response->toArray()['status'];

            $ret = new BuyEngine;
            $ret->contacted_by = $contacted_by;
            $ret->vehicle_type = $vehicle_type;
            $ret->vehicle_motor = $vehicle_motor;
            $ret->engine_no = $engine_no;
            $ret->seller_contact = $seller_contact;
            $ret->seller_email = $seller_email;
            $ret->buyer_contact = $buyer_contact;
            $ret->buyer_email = $buyer_email;
            $ret->payment_id = $payment_id;
            $ret->payment_status = $payment_status;
            $ret->save();            

        }
        $exist_engine = ReportStolen::select('engine_no')->where('engine_no', $engine_no)->first();
        $exist_eng = $exist_engine->toArray()['engine_no'];
        if($response->toArray()['status'] == 'succeeded'){
            if($ret->save()){
                if($contacted_by == "SMS"){
                    if($exist_eng != null){
                $config = Configuration::getDefaultConfiguration()
                ->setUsername('operations@commtechsoft.com')
                ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                $apiInstance = new SMSApi(new Client(), $config);
                $msg = new \ClickSend\Model\SmsMessage();
    
                $msg->setBody("Hi " . Auth::user()->name .", Engine No. " . $engine_no. "has been reported to us as stolen." ); 
                $msg->setTo($buyer_contact); 
                $msg->setSource("sdk");
                
                $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                $sms_messages->setMessages([$msg]);
                try {
                    $result = $apiInstance->smsSendPost($sms_messages);
                    // dd($result);
                    // print_r($result);
                } catch (Exception $e) {
                    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                }
                // Session::put('createVehicle','Data Saved SuccessFully');
                return view('webpages.payment-success',['data'=>$response]);
            }else{
                $config = Configuration::getDefaultConfiguration()
                ->setUsername('operations@commtechsoft.com')
                ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                $apiInstance = new SMSApi(new Client(), $config);
                $msg = new \ClickSend\Model\SmsMessage();
    
                $msg->setBody("Hi " . Auth::user()->name .", Engine No. " . $engine_no. "has not been reported stolen." ); 
                $msg->setTo($buyer_contact); 
                $msg->setSource("sdk");
                
                $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                $sms_messages->setMessages([$msg]);
                try {
                    $result = $apiInstance->smsSendPost($sms_messages);
                    // dd($result);
                    // print_r($result);
                } catch (Exception $e) {
                    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                }
                // Session::put('createVehicle','Data Saved SuccessFully');
                return view('webpages.payment-success',['data'=>$response]);
            }
        }
            if($contacted_by == "EMAIL"){
                if($exist_eng != null){
                $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
            $apiInstance = new TransactionalEmailApi(new Client(),$config);
            $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
            $email_recipient=new \ClickSend\Model\EmailRecipient();
            $email_recipient->setEmail($request->input('email_id'));
            
            $email_recipient->setName(Auth::user()->name);
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
            $email->setSubject("Commtechsoft");
            $email->setBody("Dear " . Auth::user()->name . ", <br> We have received the following details of your service request: 
            Motor Vehicle/Bike Engine No: ". $engine_no . "has been reported to us as stolen.<br><br>
            PLEASE DO NOT REPLY TO THIS EMAIL: Supposed this detail is not accurate, you can<br> 
            contact us through the contact form on the website. If we have reached you in error,<br> 
            kindly forward the content of this Email to us through the contact form and delete the <br>
            information from your Email please.<br>
            Regards<br>
            Commtechsoft Team" );
            
            try {
                $result = $apiInstance->emailSendPost($email);
                // print_r($result);
                return view('webpages.payment-success',['data'=>$response]);
            } catch (Exception $e) {
                echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
            }
        }else{
            $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
            $apiInstance = new TransactionalEmailApi(new Client(),$config);
            $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
            $email_recipient=new \ClickSend\Model\EmailRecipient();
            $email_recipient->setEmail($request->input('email_id'));
            
            $email_recipient->setName(Auth::user()->name);
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
            $email->setSubject("Commtechsoft");
            $email->setBody("Dear " . Auth::user()->name . ", <br> We have received the following details of your service request: 
            There is no record of Motor Vehicle/Bike Engine No: ". $engine_no . "with us. <br><br>PLEASE DO NOT REPLY TO THIS EMAIL: Supposed this detail is not accurate, you can <br>
            contact us through the contact form on the website. If we have reached you in error,<br> 
            kindly forward the content of this Email to us through the contact form and delete the<br> 
            information from your Email please.<br>
            Regards<br>
            Commtechsoft Team" );
            
            try {
                $result = $apiInstance->emailSendPost($email);
                // print_r($result);
                return view('webpages.payment-success',['data'=>$response]);
            } catch (Exception $e) {
                echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
            }
        }
            Session::put('createVehicle','Data Saved SuccessFully');
            // return view('webpages.payment-success',['data'=>$response]);
            }
        }
    }else{
        return view('webpages.payment-cancel',['data'=>$response]);    
        }
    }
    //Semi Knocked Engine
    public function semiKnockedChassisPayment(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        // Create a charge 
        $response = Stripe\Charge::create ([
                "amount" => 6 * 100,
                "currency" => "GBP",
                "source" => $request->stripeToken,
                "description" => "Making Payment for Search before buying Vehicle/Bike." 
        ]);
        if($response->toArray()['object'] == "charge"){
            $data = Session('semiknocked_chassis');
            $contacted_by = Session('semiknocked_chassis')->toArray()['contacted_by'];
            $vehicle_type = Session('semiknocked_chassis')->toArray()['vehicle_type'];
            $vehicle_motor = Session('semiknocked_chassis')->toArray()['vehicle_motor'];
            $chassis_no = Session('semiknocked_chassis')->toArray()['chassis_no'];
            $seller_contact = Session('semiknocked_chassis')->toArray()['seller_contact'];
            $seller_email = Session('semiknocked_chassis')->toArray()['seller_contact'];
            $buyer_contact = Session('semiknocked_chassis')->toArray()['buyer_contact'];
            $buyer_email = Session('semiknocked_chassis')->toArray()['buyer_email'];
            $payment_id = $response->toArray()['id'];
            $payment_status = $response->toArray()['status'];

            $ret = new BuyChassis;
            $ret->contacted_by = $contacted_by;
            $ret->vehicle_type = $vehicle_type;
            $ret->vehicle_motor = $vehicle_motor;
            $ret->chassis_no = $chassis_no;
            $ret->seller_contact = $seller_contact;
            $ret->seller_email = $seller_email;
            $ret->buyer_contact = $buyer_contact;
            $ret->buyer_email = $buyer_email;
            $ret->payment_id = $payment_id;
            $ret->payment_status = $payment_status;
            $ret->save();
        }
        $exist_chassis = ReportStolen::select('chassis_no')->where('chassis_no', $chassis_no)->first();
        $exist_cha = $exist_chassis->toArray()['chassis_no'];
        if($response->toArray()['status'] == 'succeeded'){
            if($ret->save()){
                if($contacted_by == "SMS"){
                    if($exist_cha != null){
                $config = Configuration::getDefaultConfiguration()
                ->setUsername('operations@commtechsoft.com')
                ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                $apiInstance = new SMSApi(new Client(), $config);
                $msg = new \ClickSend\Model\SmsMessage();
    
                $msg->setBody("Hi " . Auth::user()->name .", following details received, VIN/Chassis No. " . $chassis_no. " has been reported to us as stolen." ); 
                $msg->setTo($buyer_contact); 
                $msg->setSource("sdk");
                
                $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                $sms_messages->setMessages([$msg]);
                try {
                    $result = $apiInstance->smsSendPost($sms_messages);
                    // dd($result);
                    // print_r($result);
                } catch (Exception $e) {
                    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                }
                // Session::put('createVehicle','Data Saved SuccessFully');
                return view('webpages.payment-success',['data'=>$response]);
            }
        }else{
            $config = Configuration::getDefaultConfiguration()
                ->setUsername('operations@commtechsoft.com')
                ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
                $apiInstance = new SMSApi(new Client(), $config);
                $msg = new \ClickSend\Model\SmsMessage();
    
                $msg->setBody("Hi " . Auth::user()->name .", there is no record of, VIN/Chassis No. " . $chassis_no. " with us." ); 
                $msg->setTo($buyer_contact); 
                $msg->setSource("sdk");
                
                $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
                $sms_messages->setMessages([$msg]);
                try {
                    $result = $apiInstance->smsSendPost($sms_messages);
                    // dd($result);
                    // print_r($result);
                } catch (Exception $e) {
                    echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
                }
                // Session::put('createVehicle','Data Saved SuccessFully');
                return view('webpages.payment-success',['data'=>$response]);
        }
            if($contacted_by == "EMAIL"){
                if($exist_cha != null){
                $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
            $apiInstance = new TransactionalEmailApi(new Client(),$config);
            $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
            $email_recipient=new \ClickSend\Model\EmailRecipient();
            $email_recipient->setEmail($buyer_email);
            
            $email_recipient->setName(Auth::user()->name);
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
            $email->setSubject("Commtechsoft");
            $email->setBody("Dear " . Auth::user()->name . ", <br> We have received the following <br>
            details on your service request:<br>Chassis No.: " . $exist_cha . 
            "has been reported to us.<br><br><br>PLEASE DO NOT REPLY TO THIS EMAIL: Supposed this detail is not accurate, you can 
            contact us through the contact form on the website. If we have reached you in error, 
            kindly forward the content of this Email to us through the contact form and delete the 
            information from your Email please.");
            
            try {
                $result = $apiInstance->emailSendPost($email);
                // print_r($result);
                return view('webpages.payment-success',['data'=>$response]);
            } catch (Exception $e) {
                echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
            }
        }else{
            $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
            $apiInstance = new TransactionalEmailApi(new Client(),$config);
            $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
            $email_recipient=new \ClickSend\Model\EmailRecipient();
            $email_recipient->setEmail($buyer_email);
            
            $email_recipient->setName(Auth::user()->name);
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
            $email->setSubject("Commtechsoft");
            $email->setBody("Dear " . Auth::user()->name . ", <br> We have received the following <br>
            details on your service request:<br>Chassis No.: " . $chassis_no . 
            "has not been reported to us as stolen.<br><br><br>PLEASE DO NOT REPLY TO THIS EMAIL: Supposed this detail is not accurate, you can 
            contact us through the contact form on the website. If we have reached you in error, 
            kindly forward the content of this Email to us through the contact form and delete the 
            information from your Email please.");
            
            try {
                $result = $apiInstance->emailSendPost($email);
                // print_r($result);
                return view('webpages.payment-success',['data'=>$response]);
            } catch (Exception $e) {
                echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
            }
        }
            Session::put('createVehicle','Data Saved SuccessFully');
            return view('webpages.payment-success',['data'=>$response]);
            }
        }
    }else{
        return view('webpages.payment-cancel',['data'=>$response]);    
        }
    }
    //Delaer registration payment
    public function dealerPayment(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        // Create a charge 
        $response = Stripe\Charge::create ([
                "amount" => 5 * 100,
                "currency" => "GBP",
                "source" => $request->stripeToken,
                "description" => "Making Payment for Dealership Registration" 
        ]);
        if($response->toArray()['object'] == "charge"){
            $data = Session('dealership_payment');
            $name = Session('dealership_payment')->toArray()['name'];
            $country = Session('dealership_payment')->toArray()['country'];
            $mobile = Session('dealership_payment')->toArray()['mobile'];
            $email = Session('dealership_payment')->toArray()['email'];
            $role_id = Session('dealership_payment')->toArray()['role_id'];
            $password = Session('dealership_payment')->toArray()['password'];
            $payment_id = $response->toArray()['id'];
            $payment_status = $response->toArray()['status'];

            $ret = new User;
            $ret->name = $name;
            $ret->country = $country;
            $ret->mobile = $mobile;
            $ret->email = $email;
            $ret->role_id = $role_id;
            $ret->password = $password;
            $ret->payment_id = $payment_id;
            $ret->payment_status = $payment_status;
            $ret->save();
            return view('webpages.payment-success',['data'=>$response]);
        }
        // if($response->toArray()['status'] == 'succeeded'){
        //     if($ret->save()){
        //         if($contacted_by == "SMS"){
        //         $config = Configuration::getDefaultConfiguration()
        //         ->setUsername('operations@commtechsoft.com')
        //         ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
        //         $apiInstance = new SMSApi(new Client(), $config);
        //         $msg = new \ClickSend\Model\SmsMessage();
    
        //         $msg->setBody("Hi " . Auth::user()->name .", following details received, VIN/Chassis No. " . $chassis_no. " and Engine No. " .$chassis_no. " .You can correct mistakes through the contact page." ); 
        //         $msg->setTo($buyer_contact); 
        //         $msg->setSource("sdk");
                
        //         $sms_messages = new \ClickSend\Model\SmsMessageCollection(); 
        //         $sms_messages->setMessages([$msg]);
        //         try {
        //             $result = $apiInstance->smsSendPost($sms_messages);
        //             // dd($result);
        //             // print_r($result);
        //         } catch (Exception $e) {
        //             echo 'Exception when calling AccountApi->accountGet: ', $e->getMessage(), PHP_EOL;
        //         }
        //         // Session::put('createVehicle','Data Saved SuccessFully');
        //         return view('webpages.payment-success',['data'=>$response]);
        //     }
        //     if($contacted_by == "EMAIL"){
        //         $config = Configuration::getDefaultConfiguration()
        //                   ->setUsername('operations@commtechsoft.com')
        //                   ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
        //     $apiInstance = new TransactionalEmailApi(new Client(),$config);
        //     $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
        //     $email_recipient=new \ClickSend\Model\EmailRecipient();
        //     $email_recipient->setEmail($request->input('email_id'));
            
        //     $email_recipient->setName(Auth::user()->name);
        //     $email_from=new \ClickSend\Model\EmailFrom();
        //     $email_from->setEmailAddressId(17076);
        //     $email_from->setName("Commtechsoft");
        //     $attachment = new \ClickSend\Model\Attachment();
        //     $attachment->setContent("this is a test mail");
        //     $attachment->setType("text/plain");
        //     $attachment->setFilename("text.txt");
        //     $attachment->setDisposition("attachment");
        //     $attachment->setContentId("text");
        //     $email->setTo([$email_recipient]);
        //     $email->setFrom($email_from);
        //     $email->setSubject("Commtechsoft");
        //     $email->setBody("Dear " . Auth::user()->name . ", <br> Congratulations on the creation of the account. We have received the following <br>
        //     details on your service request:<br> Country: ". $request->input('country') . "<br> Are you a dealer: " . $request->input('dealer') . "<br> License Plate No.: "
        //     . $license_plate_no . "<br> Engine No: " . $request->input('engine_no') . "<br> Chassis No.: " . $request->input('chassis_no') . 
        //     "<br> Make:" . $request->input('make') . "<br> Model:" . $request->input('model') . "<br> Color:" . $request->input('color') . "<br>
        //     Email Id: ". $request->input('email_id') . "<br> Mobile:" . $request->input('mobile_no') );
            
        //     try {
        //         $result = $apiInstance->emailSendPost($email);
        //         // print_r($result);
        //         return view('webpages.payment-success',['data'=>$response]);
        //     } catch (Exception $e) {
        //         echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
        //     }
        //     Session::put('createVehicle','Data Saved SuccessFully');
        //     return view('webpages.payment-success',['data'=>$response]);
        //     }
        // }
    // }

    }
    
}
<?php

namespace App\Http\Controllers\webpagesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;
use App\Mail\MailNotify;
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


class ContactUsController extends Controller
{
    public function index(){
        return view('webpages.contact');
    }
    public function storeContact(Request $request){
        $data = new ContactUs();
        $data->message = $request->input('message');
        $data->name = $request->input('name');
        $data->email_id = $request->input('email_id');
        $data->subject = $request->input('subject');
        if (strlen($data->message) > 200 ) {
            Session::put('contact-message','Messages Cannot Be More Than 200 Characters!');
            return back();
        }
        elseif(strlen($data->message) < 10 ) {
            Session::put('contact-message','Messages Cannot Be Less Than 10 Characters!');
            return back();
        }
        elseif (strlen($data->subject) > 50 ) {
            Session::put('contact-subject','Subject Cannot Be More Than 50 Characters!');
            return back();
        }

        else{
            Session::forget('contact-message');
            Session::forget('contact-subject');
            Session::put('successreport','Message Has Been Sent!');
        $data->save();
       // return redirect('contact');
        $name = $request->name;
        $useremail = $request->email_id;
        $title = $request->subject;
        $content = $request->message;
        
            $email_id='adnanhmd000@gmail.com';
            $adminName='Commtechsoft';
            $config = Configuration::getDefaultConfiguration()
                          ->setUsername('operations@commtechsoft.com')
                          ->setPassword('AC6D889A-36E4-3B51-28E0-045AAE73C29A');
    
            $apiInstance = new TransactionalEmailApi(new Client(),$config);
            $email = new \ClickSend\Model\Email(); // \ClickSend\Model\Email | Email model
            $email_recipient=new \ClickSend\Model\EmailRecipient();
            $email_recipient->setEmail($email_id);
            $email_recipient->setName($adminName);
            $email_from=new \ClickSend\Model\EmailFrom();
            $email_from->setEmailAddressId(17076);
            $email_from->setName($name);
            $attachment = new \ClickSend\Model\Attachment();
            $attachment->setContent("this is a test mail");
            $attachment->setType("text/plain");
            $attachment->setFilename("text.txt");
            $attachment->setDisposition("attachment");
            $attachment->setContentId("text");
            $email->setTo([$email_recipient]);
            $email->setFrom($email_from);
            $email->setSubject("CommTechSoft | Visitors Enquiry!");
            $email->setBody("A Enquiry from <br><br> Sender Name: " . $name . " <br> Sender Email: ". $useremail . "<br> Sender Subject: " . $title . "<br> Sender Message.: "
            . $content. " ");
            try {
                $result = $apiInstance->emailSendPost($email);
                return redirect('contact');
            } catch (Exception $e) {
                echo 'Exception when calling TransactionalEmailApi->emailSendPost: ', $e->getMessage(), PHP_EOL;
            }
        }
    }    
}

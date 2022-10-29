<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
   
public function sendEmail( Request $request){
    $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'msg' =>$request->data,
        'company'=>$request->company,
        'service'=>$request->service,
    );

    $this->validate($request, [
        'email' => 'required',
        'name' => 'required',
        'service' => 'required',
        'data' => 'required',
        'g-recaptcha-response' => 'required|captcha'

    ]);

    
    $success = Mail::send('emails.mail', $data, function($message) {
        $message->to('ali.i.saad@itasameem.com')->bcc('diabsharabeh@gmail.com')->subject('Itasameem - New Contact Message');
       });
       if($success){
        return view('success')->with('success');

       }else{
        return view('success')->with('erorr');
 
       }

}


}

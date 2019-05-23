<?php

namespace Deratizacija\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(){
        return view('emails.contact');
    }

    public function send(Request $request){
        $rules = [
            'name'=>['required'],
            'email'=>['email'],
            'subject'=>['max:100'],
            'mail_message'=>['max:2000']
        ];

        $this->validate($request, $rules);

        $data= [
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'mail_message'=>$request->mail_message,
        ];

        Mail::send('emails.send', $data, function($message){
            $message->to('igor@mail.com', 'igor123')->subject('Email poslat sa kontakt strane sajta');
        });

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Mail;
use App\Message;

class ContactController extends Controller
{
    public function getContact()
    {
        return view('contact');
    }
    
    
    public function postContact(ContactFormRequest $request)
    {
        $data = new Message($request->name,$request->email, explode("\n", $request->get('message')));
        
        Mail::send('emails.contact', $data->toArray(), function ($message) use ($data) {
          $message->subject('CSC Company Formulario de contáctenos: '.$data->name)
                  ->to(Message::ORGANIZATION_EMAIL)
                  ->replyTo($data->email);
        });
    
        return back()->withMessage("Gracias por su mensaje. Ha sido enviado.");
    }
}

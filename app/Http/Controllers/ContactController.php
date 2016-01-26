<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Mail;

class ContactController extends Controller
{
    public function getContact()
    {
        return view('contact');
    }
    
    
    public function postContact(Request $request)
    {
        dd("hola");
        //return "hola";
        
        $data = $request->only('name', 'email');
        $data['messageLines'] = explode("\n", $request->get('message'));
       
        Mail::send('emails.contact', $data, function ($message) use ($data) {
          $message->subject('CSC Company - formulario de contacto: '.$data['name'])
                  ->to('amd11dot4@gmail.com');
        });
    
        return back()->withMessage("Gracias por su mensaje. Ha sido enviado.");
    }
}

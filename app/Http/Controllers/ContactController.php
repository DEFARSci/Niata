<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function mail(Request $request){

       

        $mail_data=[
            'recipient'=>'ndoyemamemoussa@gmail.com',
            'fromEmail'=>$request->email,
            'formName'=>$request->prenom,
            'formlastname'=>$request->nom,
            'subject'=>$request->sujet,
            'body'=>$request->message,
        ];

        Mail::send('mail.contact',$mail_data,function($message)use($mail_data){
            $message->to('ndoyemamemoussa@gmail.com')
                    ->from($mail_data['recipient'])
                    ->subject($mail_data['subject']);
        });
      return back()->with('success','Message envoyé avec succès');
    }
}

<?php

namespace seoGraphics\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function store(Request $request){
    	Mail::send('emails.contact', $request->all(), function($msj){
    		$msj->subject('Correo de contácto');
    		$msj->to('arman.2.r@gmail.com');
    	});	

    	Session::flash('message', 'Mensaje enviado correctamente');
    	return Redirect()->back();
    }
}

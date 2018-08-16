<?php

namespace seoGraphics\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{

	/**
	* Display the specified resource.
	*
	* @param int $id
	* @return Response
	*/

    public function store(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required|email',
    		'movil' => 'required',
    		'website' => 'required',
			'mensaje' => 'required'
    	]);

    	Mail::send('emails.contact', ['message' => $request->message], function($mail) use($request){
    		$mail->from($request->email, $request->name);

    		$mail->to('arman.2.r@gmail.com')->subject('Contact Message');
    	});

    	return redirect()->back()->with('flash_message', 'gracias por contar con nosotros.');

/*
    	Mail::send('emails.contact', $request->all(), function($msj){
    		$msj->subject('Correo de contácto');
    		$msj->to('arman.2.r@gmail.com');
    	});	

    	Session::flash('message','mensaje enviado Correctamente');
    	return Redirect()->back();
    	*/
    }
}

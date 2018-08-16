<?php

namespace seoGraphics\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
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

		/*return $request->all();*/
		/*
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

    	return redirect()->back()->with('flash_message', 'gracias por contar con nosotros.');*/

		/*$data = array (
			'name',
			'email',
			'movil',
			'website',
			'mensaje'
		);

		$user = User::findOrFail($id);*/

		$contactName = Input::get('name');
		$contactEmail = Input::get('email');
		$contactMovil = Input::get('movil');
		$contactWebsite = Input::get('website');
		$contactMensaje = Input::get('comment');

		$data = array(
			'name'=>$contactName, 
			'email'=>$contactEmail, 
			'movil'=>$contactMovil,
			'website'=>$contactWebsite,
			'comment'=>$contactMensaje,
		);
 
    	Mail::send('emails.contact', $data, function($message) use ( $contactName, $contactEmail){

			/*$m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');*/
			/*$message->subject('Correo de contácto');*/
			$message->from($contactEmail, $contactName);
			$message->to('arman.2.r@gmail.com');
			$message->replyTo($contactEmail, $contactName);
		});	
		
		return redirect()->back()->with('flash_message', 'gracias por contar con nosotros.');
/*
    	Session::flash('message','mensaje enviado Correctamente');
    	return Redirect()->back();
    	*/
    }
}

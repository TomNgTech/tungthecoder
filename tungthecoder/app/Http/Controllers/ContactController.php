<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class ContactController extends Controller
{
	public function getContact() {
		return view('contact');
	}
	
	public function postContact(Request $request) {
		$this->validate($request, [
		    'name' => 'min:3',
			'email' => 'required|email|confirmed',
			'email_confirmation' => 'email|required',
			'subject' => 'min:3',
			'message' => 'min:10']);
		$data = array(
		    'name' => $request->name,
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);
		Mail::send('emails.contact', $data, function($message) use ($data){
		    $message->replyTo($data['email']);
			$message->from($data['email']);
			$message->to('mecer80@gmail.com');
			$message->subject($data['subject']);
		});
		Mail::send('emails.noreplyContact', $data, function($message) use ($data){
			$message->from('no-reply@tungthecoder.dev', 'Tung The Coder [no-reply]');
			$message->to($data['email']);
			$message->subject($data['name'] . ', thank you for your valuable message!');
		});
		Session::flash('successContact', 'Your email was successfully sent!<br>I\'ll try to get back to you as soon as possible, please be patient!');
		return redirect('contact');
	}
}

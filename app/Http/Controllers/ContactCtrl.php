<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactsR;
use App\Setting;
class ContactCtrl extends Controller
{
    //

    public function contact(ContactsR $request){
        
    	$setting = Setting::all()->first();
    	$data = [
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'subject'=>$request->subject,
    		'message'=>$request->message,
    	];

    	\Mail::send('email.send', $data, function ($message) use($data,$setting) {
    	    $message->from($data['email'], $data['name']);
    	    $message->sender($data['email'], $data['name']);
    		$message->subject($data['subject']);
    	    $message->to($setting->email);
    	});
    	return session()->flash('send','Message Send');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\AppEmail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use View;
use App\Http\Controllers\Controller;
use App\App;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function create(Request $request){
		return View::make('app/register');
	}
	
    public function store(Request $request){
		
		//validate user input
        $validatedData = $request->validate([
			  'email' => 'required|email',
			  'name' => 'required',
			  'city' => 'required'
		 ]);
		 
		//get user input
		$input = Input::get();
		$email = $input['email'];
		$name = $input['name'];
		$city = $input['city'];	
		
		//save user data
		$appObject = new App;
		$appObject->email = $email;
		$appObject->name = $name;
		$appObject->city = $city;
		$appObject->save();
		
		//send an email
		Mail::to($email)->send(new AppEmail($appObject));
		
		return View::make('app/thankyou')->with(array('name'=> $name));
	}
	
	public function show(Request $request, $name){		
		return View::make('app/thankyou')->with(array('name'=> $name));
	}	
}	
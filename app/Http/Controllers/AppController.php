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
		
        $validatedData = $request->validate([
			  'email' => 'required|email',
			  'name' => 'required',
			  'city' => 'required'
		 ]);
		$input = Input::get();
		$email = $input['email'];
		$name = $input['name'];
		$city = $input['city'];	
		
		$appObject = new App;
		$appObject->email = $email;
		$appObject->name = $name;
		$appObject->city = $city;
		$appObject->save();
		
		Mail::to($email)->send(new AppEmail($appObject));
		return View::make('app/thankyou')->with(array('name'=> $name));
	}
}	
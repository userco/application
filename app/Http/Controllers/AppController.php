<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use View;
use App\Http\Controllers\Controller;
use App\App;

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
		// get the data that the user have entered
		$input = Input::get();
		$email = $input['email'];
		$name = $input['name'];
		$city = $input['city'];
		
	
		$appObject = new App;
		$appObject->email = $email;
		$appObject->name = $name;
		$appObject->city = $city;
		$appObject->save();
	
		return View::make('app/thankyou')->with(array('name'=> $name));
	}
}	
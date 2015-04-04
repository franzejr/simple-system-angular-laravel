<?php

class LoginController extends BaseController {

	public function getIndex()
	{
		return User::all();	
	}

	public function getLogin(){
		return View::make('login.form');
	}

	public function postLogin(){


		$email = Input::get('email');
		$password = Input::get('password');
		$credentials = array('email'=> $email, 'password' => $password);

			
		if(Auth::attempt($credentials)){
			return Redirect::intended('/');
		}

			return Redirect::to('/auth/login');
	}

}

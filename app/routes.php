<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when tha	t URI is requested.
|
*/


Route::get('/', array('before'=>'auth', function(){
	return View::make('index');

}));

Route::controller('template', 'ViewController');
Route::controller('auth', 'LoginController');

Route::group(['prefix'=> 'api/v1','before'=>'auth'], function(){
	Route::resource('customers', 'CustomerController');
	Route::resource('appliances', 'ApplianceController');
	Route::resource('components', 'ComponentController');
});
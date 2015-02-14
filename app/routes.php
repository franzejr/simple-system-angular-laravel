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

Route::get('/', function()
{
	return View::make('index');
});

Route::controller('template', 'ViewController');

Route::group(['prefix'=> 'api/v1'], function(){
	Route::resource('customers', 'CustomerController');
	Route::resource('appliances', 'ApplianceController');
	Route::resource('components', 'ComponentController');
});
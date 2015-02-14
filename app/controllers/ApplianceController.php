<?php

class ApplianceController extends \BaseController {


	public function index()
	{
		$appliances = Appliance::all();

		return $appliances;
	}

	public function create()
	{
		return View::make('appliances.create');
	}

	public function store()
	{
		$appliance = Appliance::create( Input::all() );

		return Response::json(["message"=>"created"]);
	}

	public function show($id)
	{
		$appliance = Appliance::find($id);
		return $appliance;
	}


	public function edit($id)
	{
		$appliance = Appliance::find($id);
		return View::make('appliances.edit', compact('appliance'));
	}


	public function update($id)
	{
		$appliance = Appliance::find( $id );

		$appliance->name = Input::get('name');
		$appliance->model = Input::get('model');
		$appliance->serie = Input::get('serie');
		$appliance->brand = Input::get('brand');
		$appliance->customer_id = Input::get('customer_id');
		$appliance->obs = Input::get('obs');

		$appliance->save();

		return Response::json(["message"=>"updated"]);
	}

	public function destroy($id)
	{
		$appliance = Appliance::find($id);
		$appliance->delete();

		return Response::json(["message"=>"destroyed"]);
	}

}
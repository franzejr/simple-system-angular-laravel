<?php

class ComponentController extends \BaseController {


	public function index()
	{
		$components = Component::all();
		return $components;
	}

	public function create()
	{
		return View::make('components.create');
	}

	public function store()
	{
		$customer = Component::create( Input::all() );

		return Response::json(["message"=>"created"]);
	}

	public function show($id)
	{
		$component = Component::find($id);

		return $component;
	}


	public function edit($id)
	{
		$component = Component::find( $id );

		return View::make('components.edit', compact('component'));
	}


	public function update($id)
	{
		$component = Component::find( $id );

		$component->name = Input::get('name');
		$component->address = Input::get('code');
		$component->phone = Input::get('phone');
		$component->mobile = Input::get('quantity');
		$component->obs = Input::get('obs');
		$component->save();

		return Response::json(["message"=>"updated"]);
	}


	public function destroy($id)
	{
		$component = Component::find($id);
		$component->delete();

		return Response::json(["message"=>"destroyed"]);
	}

}
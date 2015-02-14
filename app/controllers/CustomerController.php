<?php

class CustomerController extends \BaseController {


	public function index()
	{
		if(isset($_GET['name'])){
			$search = "%".$_GET['name']."%";
			$customers = Customer::where('name','LIKE', $search)->get();
		}
		else{
			$customers = Customer::all();	
		}
		
		return $customers;
	}

	public function create()
	{
		return View::make('customers.create');
	}

	public function store()
	{
		$customer = Customer::create( Input::all() );

		return Response::json(["message"=>"saved"]);
	}

	public function show($id)
	{
		$customer = Customer::find($id);

		return $customer;
	}


	public function edit($id)
	{
		$customer = Customer::find( $id );

		return View::make('customers.edit', compact('customer'));
	}


	public function update($id)
	{
		$customer = Customer::find( $id );

		$customer->name = Input::get('name');
		$customer->address = Input::get('address');
		$customer->phone = Input::get('phone');
		$customer->mobile = Input::get('mobile');
		$customer->email = Input::get('email');
		$customer->obs = Input::get('obs');
		$customer->save();

		return Response::json(["message"=>"updated"]);
	}


	public function destroy($id)
	{
		$customer = Customer::find($id);
		$customer->delete();
		
		return Response::json(["message"=>"destroyed"]);
	}

}
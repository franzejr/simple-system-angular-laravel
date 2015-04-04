<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		User::create(array(
			'name' =>'franzejr',
			'email' =>'franzejr@gmail.com'		,
			'password'=> Hash::make('caramba') ));
		// $this->call('UserTableSeeder');
	}

}

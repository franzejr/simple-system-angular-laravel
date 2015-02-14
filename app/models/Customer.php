<?php

class Customer extends \Eloquent {
	protected $fillable = array(
		'name',
		'address',
		'phone',
		'mobile',
		'email',
		'obs'
	);
}
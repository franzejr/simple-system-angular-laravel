<?php

class Appliance extends \Eloquent {
	protected $fillable = array(
		'name',
		'model',
		'customer_id',
		'serie',
		'brand',
		'obs'
	);

	protected $with = ['customer'];

	public function customer()
    {
        return $this->belongsTo('Customer');
    }
}
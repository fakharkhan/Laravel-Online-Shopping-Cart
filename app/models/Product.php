<?php

class Product extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
    protected $guarded = array();

    public function vendor()
    {
        return $this->belongsTo('Vendor');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }
}
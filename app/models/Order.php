<?php

class Order extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function customer()
    {
        return $this->belongsTo('Customer');
    }

    public function employee()
    {
        return $this->belongsTo('Employee');
    }
}
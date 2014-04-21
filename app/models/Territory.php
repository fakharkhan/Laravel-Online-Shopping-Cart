<?php

class Territory extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'code' => 'required',
         'description' => 'required',
        'region_id' => 'required'
	];

	// Don't forget to fill this array
    protected $guarded = array();


    public function region()
    {
        return $this->belongsTo('Region');
    }
}
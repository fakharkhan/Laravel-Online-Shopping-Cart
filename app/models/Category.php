<?php

class Category extends \Eloquent {

    protected $guarded = array();

    // Add your validation rules here
	public static $rules = [
		 'name' => 'required',
         'picture' => 'required'
	];

//	// Don't forget to fill this array
//	protected $fillable = [];

    public function products()
    {
        return $this->hasMany('Product');
    }
}
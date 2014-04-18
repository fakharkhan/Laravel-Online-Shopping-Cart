<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

    public function getRememberTokenName()
    {
        return '';
    }

    public function getRememberToken(){
        return '';
    }

    public function setRememberToken($value)
    {
        return $value;
    }

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public function menu()
    {
        return array(
            'Orders' => array('url' => 'javascript:void(0)','icon'=>'fa fa-shopping-cart', 'actions' => array('All Orders' => 'orders', 'New Order' => 'orders/create')),

            'Products' => array('url' => 'javascript:void(0)','icon'=>'fa fa-barcode', 'actions' => array('All Products' => 'products', 'New Product' => 'products/create')),

            'Categories' => array('url' => 'javascript:void(0)','icon'=>'fa fa-sitemap', 'actions' => array('All Categories' => 'categories', 'New Category' => 'categories/create')),

            'Shippers' => array('url' => 'javascript:void(0)','icon'=>'clip-tree-2', 'actions' => array('All Shippers' => 'shippers', 'New Shipper' => 'shippers/create')),

            'Vendors' => array('url' => 'javascript:void(0)','icon'=>'fa fa-truck', 'actions' => array('All Vendors' => 'vendors', 'New Vendor' => 'vendors/create')),

            'Employees' => array('url' => 'javascript:void(0)','icon'=>'fa fa-suitcase', 'actions' => array('All Employees' => 'employees', 'New Employee' => 'employees/create')),

            'Regions' => array('url' => 'javascript:void(0)','icon'=>'clip-checkbox-partial', 'actions' => array('All Regions' => 'regions', 'New Region' => 'regions/create')),

            'Territories' => array('url' => 'javascript:void(0)','icon'=>'clip-earth', 'actions' => array('All Territories' => 'territories', 'New Territory' => 'territories/create')),



        );
    }

}
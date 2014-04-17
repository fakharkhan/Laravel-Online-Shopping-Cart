<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showHome');
    |
    */

    public function showHome()
    {

//        $navigation_menu = array(
//            'Orders' => array('url' => 'javascript:void(0)','icon'=>'fa fa-shopping-cart', 'actions' => array('All Orders' => 'orders', 'New Order' => 'orders/create')),
//            'Employees' => array('url' => 'javascript:void(0)','icon'=>'clip-users-3', 'actions' => array('All Employees' => 'employees', 'New Employee' => 'employees/create')),
//            'Products' => array('url' => 'javascript:void(0)','icon'=>'fa fa-barcode', 'actions' => array('All Products' => 'products', 'New Product' => 'products/create')),
//            'Categories' => array('url' => 'javascript:void(0)','icon'=>'clip-users-3', 'actions' => array('All Categories' => 'categories', 'New Category' => 'categories/create'))
//        );
//        ,compact('navigation_menu')
//
        return View::make('home');
    }

}
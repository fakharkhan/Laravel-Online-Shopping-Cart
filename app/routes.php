<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

if (Auth::attempt(array('email' => 'admin@cart.com', 'password' => 'admin')))
{
    Route::get('/', 'HomeController@showHome');


}

Route::group(array('before' => 'auth'), function () {
    Route::resource('vendors', 'VendorsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');

    Route::resource('regions', 'RegionsController');
    Route::resource('employees', 'EmployeesController');
    Route::resource('territories', 'TerritoriesController');

    Route::resource('customers', 'CustomersController');
    Route::resource('shippers', 'ShippersController');

    Route::resource('orders', 'OrdersController');
});


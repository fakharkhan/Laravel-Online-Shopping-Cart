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

	 //	$this->call('VendorsTableSeeder');
     // $this->call('CategoriesTableSeeder');
     // $this->call('ProductsTableSeeder');
    //  $this->call('RegionsTableSeeder');
    //    $this->call('TerritoriesTableSeeder');
     //  $this->call('ShippersTableSeeder');
      //  $this->call('EmployeesTableSeeder');
      //  $this->call('CustomersTableSeeder');
       // $this->call('OrdersTableSeeder');
        $this->call('UsersTableSeeder');

    }

}
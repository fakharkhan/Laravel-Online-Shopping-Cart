<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->string('firstname', 20);
			$table->string('lastname', 20);
			$table->string('title', 30);
			$table->string('titleofcourtesy', 25);
			$table->date('birthdate');
			$table->integer('manager_id');
			$table->date('hiredate');
			$table->string('address');
			$table->string('postalcode', 20);
			$table->integer('city_id');
			$table->integer('country_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('companyname');
			$table->string('contactname');
			$table->string('contacttitle');
			$table->string('address');
			$table->string('city');
			$table->string('region');
			$table->string('postalcode');
			$table->string('country');
			$table->string('phone');
			$table->string('fax');
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
		Schema::drop('customers');
	}

}

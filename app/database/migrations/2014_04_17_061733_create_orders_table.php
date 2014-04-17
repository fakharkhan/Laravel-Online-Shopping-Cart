<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id');
			$table->integer('employee_id');
			$table->date('orderdate');
			$table->date('requireddate');
			$table->date('shipdate');
			$table->string('shipvia');
			$table->float('freight');
			$table->string('shipname');
			$table->string('shipaddress');
			$table->string('shipcity');
			$table->string('shipregion');
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
		Schema::drop('orders');
	}

}

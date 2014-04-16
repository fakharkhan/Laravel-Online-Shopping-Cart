<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('vendor_id');
			$table->integer('category_id');
			$table->string('quantityperunit');
			$table->float('unitprice');
			$table->integer('unitsinstock');
			$table->integer('unitsonorder');
			$table->integer('reorderlevel');
			$table->tinyInteger('discontinued');
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
		Schema::drop('products');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',250);
			$table->text('overview',250);
			$table->integer('country');
            $table->integer('city');
			$table->text('address',250);
			$table->string('postcode');
			$table->string('telephone',150);
			$table->string('web',150);
			$table->string('email',150);
			$table->string('logourl');
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
		Schema::drop('vendors');
	}

}

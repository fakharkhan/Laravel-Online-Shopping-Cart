<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_pictures', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id');
			$table->string('icon');
			$table->string('medium');
            $table->string('small');
            $table->string('large');
			$table->string('original');
			$table->timestamps();
            $table->unique(array('product_id') );
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_pictures');
	}

}

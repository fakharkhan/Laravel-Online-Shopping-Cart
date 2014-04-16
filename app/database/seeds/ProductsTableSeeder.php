<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Product::create(array(
                'name' => $faker->name,
                'vendor_id' => $faker->randomNumber(1, 50),
                'category_id' => $faker->randomNumber(1, 10),
                'quantityperunit' => 1,
                'unitprice' => $faker->randomNumber(10, 200),
                'unitsinstock' => $faker->randomNumber(1, 1000),
                'unitsonorder' => $faker->randomNumber(100, 500),
                'reorderlevel' => $faker->randomNumber(50, 500),
                'discontinued' => $faker->randomNumber(0, 1),
            ));
		}
	}

}
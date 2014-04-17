<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Order::create(array(
                'customer_id' => $faker->randomNumber(1, 10),
                'employee_id' => $faker->randomNumber(1, 15),
                'requireddate' => $faker->date,
                'orderdate' => $faker->date,
                'shipdate' => $faker->date,
                'shipvia' => "VESSEL",
                'freight' => $faker->randomNumber(50, 500),
                'shipname' => $faker->name,
                'shipaddress' => $faker->address,
                'shipcity' => $faker->city,
                'shipregion' => $faker->state
            ));
		}
	}

}
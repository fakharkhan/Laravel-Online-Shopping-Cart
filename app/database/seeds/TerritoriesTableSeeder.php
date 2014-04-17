<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TerritoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Territory::create(array(
                'code' => $faker->unique()->cityPrefix,
                'description' => $faker->city,
                'region_id' => $faker->randomNumber(1, 10)
            ));
		}
	}

}
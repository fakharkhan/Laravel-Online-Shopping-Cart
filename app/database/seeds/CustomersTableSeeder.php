<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class Designations extends \Faker\Provider\Person
{
    private static $designation = array('Manager', 'Director', 'Supervisor', 'Office Boy', 'CEO');

    public static function designation()
    {
        return static::randomElement(static::$designation);
    }
}

class CustomersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $faker->addProvider(new Designations($faker));

		foreach(range(1, 10) as $index)
		{
			Customer::create(array(
                'companyname' => $faker->company,
                'contactname' => $faker->name,
                'contacttitle' => $faker->designation,
                'address' => $faker->address,
                'city' => $faker->city,
                'region' => $faker->state,
                'postalcode' => $faker->postcode,
                'country' => $faker->country,
                'phone' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber
            ));
		}
	}

}
<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Faker\Factory as Faker;
use Faker\Provider\en_US\Person as person;

class Designations extends \Faker\Provider\Person
{
    private static $designation = array('Manager', 'Director', 'Supervisor', 'Office Boy', 'CEO');

    public static function designation()
    {
        return static::randomElement(static::$designation);
    }
}

class EmployeesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new person($faker));
        $faker->addProvider(new Designations($faker));

        foreach(range(1, 15) as $index)
        {
            Employee::create(array(
                'firstname' => $faker->firstName,
                'lastname' =>  $faker->lastName,
                'title' =>     $faker->designation,
                'titleofcourtesy' => $faker->prefix,
                'birthdate' =>  $faker->date,
                'manager_id' => $faker->randomNumber(1, 10),
                'hiredate' =>   $faker->date,
                'address' =>    $faker->address,
                'postalcode' => $faker->postcode,
                'city_id' => 1,
                'country_id' => 1
            ));
        }
    }

}
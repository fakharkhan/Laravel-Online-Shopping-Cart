<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class VendorsTableSeeder extends Seeder {

	public function run()
	{

        $count = 50;

        $this->command->info('Deleting existing Vendor table ...');
        DB::table('vendors')->delete();

        $faker = Faker\Factory::create('en_GB');

        $faker->addProvider(new Faker\Provider\en_GB\Address($faker));
        $faker->addProvider(new Faker\Provider\en_GB\Internet($faker));


        $this->command->info('Inserting '.$count.' sample records using Faker ...');
        // $faker->seed(1234);

        for( $x=0 ; $x<$count; $x++ )
        {
            Vendor::create(array(
                'name' => $faker->name,
                'email' => $faker->companyEmail,
                'web' => $faker->domainName,
                'overview' => $faker->paragraph($nbSentences = 3),
                'country' => 1,
                'city' => 1,
                'address' => $faker->address,
                'postcode' => $faker->postcode,
                'telephone' => $faker->phoneNumber,
                'logourl' => ''
            ));
        }

        $this->command->info('Person table seeded using Faker ...');
	}

}
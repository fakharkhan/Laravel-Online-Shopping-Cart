<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create(
            array(
                'email' => 'admin@cart.com',
                'login' => 'admin',
                'password' => Hash::make('admin'),
                'photo' => '',
                'active' => 1
            )
        );
	}

}
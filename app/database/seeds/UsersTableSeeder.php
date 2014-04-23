<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{

		User::create(array(
				"email"=> "admin",
				"first_name"=>"admin",
				"last_name"=>"admin",
				"middle_name"=>"irene",
				"level"=>0,
				"address"=>"admin",
				"contact"=>"dar",
				"status"=>"active",
				"password"=>Hash::make('1234')
			));

	}

}
<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{

		User::create(array(

				"first_name"=>"admin",
				"last_name"=>"admin",
				"middle_name"=>"irene",
				"level"=>0,
				"username"=>"admin",
				"phone_no"=>"000 000 000",
				"extension_no"=>"1",
				"room_no"=>"1",
				"address"=>"admin",
				"contact"=>"dar",
				"status"=>"active",
				"password"=>Hash::make('1234')
			));

	}

}
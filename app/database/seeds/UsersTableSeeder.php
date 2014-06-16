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
				"status"=>"active",
				"password"=>Hash::make('1234')
			));

		User::create(array(

				"first_name"=>"Raphael",
				"last_name"=>"Mhando",
				"middle_name"=>"John",
				"level"=>7,
				"username"=>"hr",
				"phone_no"=>"0762813052",
				"extension_no"=>"2",
				"room_no"=>"7",
				"status"=>"active",
				"password"=>Hash::make('1234')
			));

	}



}
<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class ServicesTableSeeder extends Seeder {

	public function run()
	{

		Service::create(array(

				"name"=>"registration",
				"price"=> 5000,
				
			));
		Service::create(array(

				"name"=>"consultation",
				"price"=> 5000,
				
			));


	}

}
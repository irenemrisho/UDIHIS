<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class PriceCompaniesTableSeeder extends Seeder {

	public function run()
	{

		Price_company::create(array(

				"name"=>"NHIF",
				"contact_name"=>"NHIF Company",
				"pobox"=> 2002,
				"city"=> "Dar es Salaam",
				"contact_email"=>"nhif@udihis.udsm.co.tz",
				"from"=> "12/12/2000",
				"to"=>"12/12/2009",
				"payement_type" => "NHIF",
				
			));


	}

}
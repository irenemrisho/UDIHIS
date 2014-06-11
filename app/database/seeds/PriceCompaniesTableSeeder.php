<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class PriceCompaniesTableSeeder extends Seeder {

	public function run()
	{

		Price_company::create(array(

				"service_id"=>1,

				"company_id"=>1,

				"price"=>5000,				
			));
		Price_company::create(array(

				"service_id"=>2,

				"company_id"=>2,

				"price"=>10000,				
			));


	}

}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
		public function up()
	{
		Schema::create('insuranceCompanies',function($table){
			$table->increments('id');			
			$table->String('name');
            $table->String('contact_name');                      
            $table->String('pobox');                      
            $table->String('city');                      
            $table->String('contact_email');                      
            $table->String('payement_type');                      
            $table->date('from');                      
            $table->date('to');                      
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('insuranceCompanies');
	}


}

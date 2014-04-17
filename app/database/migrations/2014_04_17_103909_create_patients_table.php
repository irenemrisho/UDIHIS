<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients',function($table){
			$table->increments('id');
			$table->String('firstname');
			$table->String('filenumber');
			$table->String('lastname');
			$table->String('gender');
			$table->String('birth');
			$table->String('address');
			$table->String('phone');
			$table->String('temperature');
			$table->String('bloodpressure');
			$table->String('weight');
			$table->String('allergy');
			$table->String('bloodgroup');
			$table->String('rhesus');
			$table->String('paymenttype');
			$table->String('fullname');
			$table->String('phone2');
			$table->String('section');
			$table->String('sectioninfo');
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
		Schema::drop('patients');
	}

}

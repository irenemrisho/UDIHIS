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
			$table->String('firstname')->nullable();
			$table->integer('filenumber')->nullable();
			$table->String('lastname')->nullable();
			$table->String('gender')->nullable();
			$table->String('birth')->nullable();
			$table->String('address')->nullable();
			$table->String('phone')->nullable();
			$table->String('temperature')->nullable();
			$table->String('bloodpressure')->nullable();
			$table->String('weight')->nullable();
			$table->String('allergy')->nullable();
			$table->String('bloodgroup')->nullable();
			$table->String('rhesus')->nullable();
			$table->String('paymenttype')->nullable();
			$table->String('fullname')->nullable();
			$table->String('phone2')->nullable();
			$table->String('section')->nullable();
			$table->String('sectioninfo')->nullable();
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

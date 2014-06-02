<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments',function($table){
			$table->increments('id');
            $table->String('first_name');
            $table->String('last_name');
            $table->String('phone_number');
			$table->integer('patient_id')->references('id')->on('patients');
            $table->integer('user_id')->references('id')->on('users')->nullable();
            $table->String('date');
            $table->String('time');
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
		Schema::drop('appointments');
	}

}

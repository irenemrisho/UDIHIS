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
            $table->integer('patient_id')->nullable();
			$table->foreign('patient_id')->references('id')->on('patients')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->integer('doctor_id')->nullable();
            $table->foreign('doctor_id')->references('id')->on('users')
            ->onDelete('cascade')
			->onUpdate('cascade');
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

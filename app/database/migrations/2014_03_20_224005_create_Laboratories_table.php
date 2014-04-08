<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratories',function($table){
			$table->increments('id');
			$table->integer('pv_id')->references('id')->on('patients_visits');
			$table->String('test_type');
	        $table->String('result');
	        $table->date('date');
	        $table->integer('service_id')->references('id')->on('services');
	        $table->integer('user_id')->references('id')->on('users');

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
		Schema::drop('laboratories');
	}

}

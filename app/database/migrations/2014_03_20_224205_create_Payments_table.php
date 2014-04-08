<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	Schema::create('payments',function($table){
		$table->increments('id');
		$table->integer('service_id')->references('id')->on('services');
        $table->integer('patient_id')->references('id')->on('patients');   
        $table->String('status');
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
		Schema::drop('payments');
	}

}

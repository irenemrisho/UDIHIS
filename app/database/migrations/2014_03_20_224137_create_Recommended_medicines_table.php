<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendedMedicinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recommended_medicines',function($table){
			$table->increments('id');
			$table->integer('medicine_id')->references('id')->on('medicines');
            $table->integer('pv_id')->references('id')->on('patients_visits');
            $table->String('quantity');
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
		Schema::drop('recommended_medicines');
	}

}

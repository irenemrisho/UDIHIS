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
			$table->double('cost')->nullable();
			$table->text('description');
			$table->increments('id');
			$table->integer('medicine_id')->nullable();
			$table->foreign('medicine_id')->references('id')->on('medicines')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->integer('pv_id')->nullable();
            $table->foreign('pv_id')->references('id')->on('patients_visits')
            ->onDelete('cascade')
			->onUpdate('cascade');
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

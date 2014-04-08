<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicines',function($table){
			$table->increments('id');
			$table->integer('name');
            $table->integer('batch_no');
            $table->String('strength');
            $table->String('price');
            $table->String('man_date');
            $table->String('exp_date'); 
            $table->String('quantity');
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
		Schema::drop('medicines');
	}

}

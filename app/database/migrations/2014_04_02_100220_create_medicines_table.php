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
			$table->string('name');
            $table->integer('batch_no');
            $table->string('strength');
            $table->string('price');
            $table->string('man_date');
            $table->string('exp_date'); 
            $table->string('quantity');
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

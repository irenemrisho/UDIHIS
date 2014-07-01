<?php


use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration {


	public function up(){
       Schema::create('medicines',function($table){
            $table->increments('id');
            $table->string('name')->nullable;
            $table->string('price')->nullable;
            $table->string('man_date')->nullable;
            $table->string('exp_date')->nullable;
            $table->string('quantity')->nullable;
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
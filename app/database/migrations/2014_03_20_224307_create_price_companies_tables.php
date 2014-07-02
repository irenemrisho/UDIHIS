<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceCompaniesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
      Schema::create('price_companies',function($table){
			$table->increments('id');
			$table->integer('service_id')->nullable();
			$table->foreign('service_id')->references('id')->on('services')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->integer('company_id')->nullable();
			$table->foreign('company_id')->references('id')->on('insuranceCompanies')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->String('price')->nullable();
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
	Schema::drop('price_companies');
	}

}

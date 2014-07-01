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
		$table->integer('price_company_id')->nullable();
		$table->foreign('price_company_id')->references('id')->on('price_companies')
		->onDelete('cascade')
	    ->onUpdate('cascade');  
		$table->increments('id');
		$table->integer('patient_id')->nullable();
        $table->foreign('patient_id')->references('id')->on('patients')
        ->onDelete('cascade')
	    ->onUpdate('cascade');   
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

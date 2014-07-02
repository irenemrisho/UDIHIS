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
			$table->integer('pv_id')->nullable();
			$table->foreign('pv_id')->references('id')->on('patients_visits')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->String('test_type');
	        $table->String('result');
	        $table->date('date');
	        $table->integer('service_id')->nullable();
	        $table->foreign('service_id')->references('id')->on('services')
	        ->onDelete('cascade')
			->onUpdate('cascade');
			$table->integer('user_id')->nullable();
	        $table->foreign('user_id')->references('id')->on('users')
	        ->onDelete('cascade')
			->onUpdate('cascade');
	        $table->boolean('tested')->default('FALSE');

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

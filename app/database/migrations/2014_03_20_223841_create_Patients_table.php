<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients',function($table){
			$table->increments('id');
			$table->integer('user_id')->references('id')->on('Users');
			$table->String('first_name');
			$table->String('middle_name');
            $table->String('last_name');
            $table->String('gender');
            $table->date('birth_date');
            $table->String('address');
            $table->String('contact');	
                        
                       
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
		Schema::drop('patients');
	}

}

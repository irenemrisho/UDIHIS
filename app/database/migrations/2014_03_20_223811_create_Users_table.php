<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id');
			$table->String('email');
            $table->String('password');
            $table->String('first_name');
            $table->String('middle_name');
            $table->String('last_name');	
            $table->String('address');
            $table->integer('level');
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
		Schema::drop('users');
	}

}

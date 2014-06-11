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
            $table->integer('notification_id')->references('id')->on('Notification')->nullable();			$table->String('email')->nullable();
            $table->String('password')->nullable();
            $table->String('first_name')->nullable();
            $table->String('middle_name')->nullable();
            $table->String('last_name')->nullable();
            $table->String('extension_no')->nullable();
            $table->String('username')->nullable();
            $table->integer('level')->nullable();
           	$table->String('phone_no')->nullable();
           	$table->String('room_no')->nullable();
           	$table->String('status')->default('active'); 
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

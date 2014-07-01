<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms',function($table){
			$table->increments('id');
			$table->integer('room_no');
			$table->String('room_type');
            $table->String('status');
            $table->String('no_of_beds');
            $table->integer('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')
            ->onDelete('cascade')
			->onUpdate('cascade'); 
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
		Schema::drop('rooms');
	}

}

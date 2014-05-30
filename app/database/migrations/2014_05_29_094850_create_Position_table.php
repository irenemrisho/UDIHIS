<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('position',function($table){
            $table->increments('id');
            $table->String('name');
            $table->String('facility');
            $table->String('proposed_hiring_date');
            $table->String('status');
            $table->String('proposed_salary');
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
        Schema::drop('position');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCostColumnToRecommendedMedicinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recommended_medicines', function(Blueprint $table)
		{
			$table->double('cost')->nullable();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('recommended_medicines', function(Blueprint $table)
		{
			$table->dropColumn('cost');
		});
	}

}

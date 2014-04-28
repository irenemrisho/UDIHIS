<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDescriptionColumnToRecommendedMedicinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recommended_medicines', function(Blueprint $table)
		{
			$table->text('description');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recommended_medicines', function(Blueprint $table)
		{
			$table->dropColumn('description');
		});
	}

}

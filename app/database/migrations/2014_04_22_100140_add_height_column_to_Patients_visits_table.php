<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddHeightColumnToPatientsVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('patients_visits', function(Blueprint $table)
		{
			$table->string('height');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('patients_visits', function(Blueprint $table)
		{
			$table->dropColumn('height');
		});
	}

}

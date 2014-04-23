<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddBloodpressureColumnToPatientsVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('patients_visits', function(Blueprint $table)
		{
			$table->string('bloodpressure');
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
			$table->dropColumn('bloodpressure');
		});
	}

}

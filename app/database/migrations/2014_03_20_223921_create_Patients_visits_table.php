<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients_visits',function($table){
			$table->increments('id');
<<<<<<< HEAD
			$table->integer('doctor_id')->references('id')->on('users');
			$table->String('medicine_id')->references('id')->on('medicines');
            $table->String('patient_id')->references('id')->on('patients');
            $table->date('account_id')->references('id')->on('services');
            $table->integer('room_id')->references('id')->on('rooms');
            $table->String('consultation');
            $table->String('weight');	
            $table->String('disease');
            $table->String('bloodgroup');
            $table->date('admission_date');
           	$table->date('discharge_date'); 
=======
			$table->integer('doctor_id')->references('id')->on('users')->nullable();
			$table->String('medicine_id')->references('id')->on('medicines')->nullable();
			$table->String('labteststatus')->default('No');
	        $table->String('prescriptionstatus')->default('No');
            $table->String('patient_id')->references('id')->on('patients')->nullable();
            $table->date('account_id')->references('id')->on('services')->nullable();
            $table->integer('room_id')->references('id')->on('rooms')->nullable();
            $table->String('consultation')->nullable();
            $table->String('weight')->nullable();	
            $table->String('disease')->nullable();
            $table->date('admission_date')->nullable();
           	$table->date('discharge_date')->nullable(); 
>>>>>>> b6a24436f00f73107e9b9addeda77b1ba46a63e4
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
		Schema::drop('patients_visits');
	}

}

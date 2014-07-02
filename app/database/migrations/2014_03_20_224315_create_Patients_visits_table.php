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
			$table->String('admit_notes')->nullable();
			$table->text('description')->nullable();
			$table->string('bloodpressure')->nullable();
			$table->string('height')->nullable();
			$table->string('location')->nullable();
			$table->string('temperature')->nullable();
			$table->increments('id');
			$table->integer('doctor_id')->nullable();
			$table->foreign('doctor_id')->references('id')->on('users')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->integer('medicine_id')->nullable();
			$table->foreign('medicine_id')->references('id')->on('medicines')
			->onDelete('cascade')
			->onUpdate('cascade');
			$table->String('labteststatus')->default('No');
	        $table->String('prescriptionstatus')->default('No');
	        $table->integer('patient_id')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients')
            ->onDelete('cascade')
		    ->onUpdate('cascade');
		    $table->integer('account_id')->nullable();
            $table->foreign('account_id')->references('id')->on('services')
            ->onDelete('cascade')
			->onUpdate('cascade');
			$table->integer('room_id')->nullable();
            $table->foreign('room_id')->references('id')->on('rooms')
            ->onDelete('cascade')
			->onUpdate('cascade');
            $table->String('consultation')->nullable();
            $table->String('weight')->nullable();	
            $table->String('disease')->nullable();
            $table->date('admission_date')->nullable();
           	$table->date('discharge_date')->nullable(); 
           	$table->String('bloodgroup')->nullable();
           	$table->String('paymenttype')->nullable();
           	$table->String('allergy');
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

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
            $table->integer('notification_id')->references('id')->on('Notification')->nullable();
            $table->String('password')->nullable();
            $table->String('username')->nullable();
            $table->integer('level')->nullable();
            $table->String('room_no')->nullable();
            $table->String('status')->default('active');
            $table->String('first_name')->nullable();
            $table->String('last_name')->nullable();
            $table->String('middle_name')->nullable();
            $table->String('nationality')->nullable();
            $table->String('residence')->nullable();
            $table->String('place_of_domicile')->nullable();
            $table->String('date_of_birth')->nullable();
            $table->String('gender')->nullable();
            $table->String('marital_status')->nullable();
            $table->String('number_of_dependence')->nullable();
            $table->String('disability')->nullable();
            $table->String('photo')->nullable();

            $table->String('next_kn_name')->nullable();
            $table->String('relationship')->nullable();
            $table->String('next_kn_email')->nullable();
            $table->String('next_kn_mailing')->nullable();
            $table->String('next_kn_mob_no')->nullable();
            $table->String('next_kn_tel_no')->nullable();
            $table->String('next_kn_notes')->nullable();

            $table->String('action_taken')->nullable();
            $table->String('reason')->nullable();
            $table->String('action_start')->nullable();
            $table->String('action_end')->nullable();
            $table->String('date_of_discussion')->nullable();
            $table->String('involved_people')->nullable();

            $table->String('phone_no')->nullable();
            $table->String('telephone')->nullable();
            $table->String('email')->nullable();
            $table->String('fax')->nullable();
            $table->String('mailing_address')->nullable();
            $table->String('offc_mobile_phone')->nullable();
            $table->String('extension_no')->nullable();
            $table->String('offc_email')->nullable();
            $table->String('offc_fax')->nullable();
            $table->String('offc_mailing_address')->nullable();

            $table->String('institution')->nullable();
            $table->String('location')->nullable();
            $table->String('year_complete')->nullable();
            $table->String('profession')->nullable();
            $table->String('major')->nullable();

            $table->String('section')->nullable();
            $table->String('date_first_appointment')->nullable();
            $table->String('employee_type')->nullable();
            $table->String('employment_status')->nullable();
            $table->String('salary')->nullable();
            $table->String('super_position')->nullable();
            $table->String('payslip_no')->nullable()->unique();

            $table->String('reg_council')->nullable();
            $table->String('reg_no')->nullable();
            $table->String('reg_date')->nullable();
            $table->String('lisence')->nullable();
            $table->String('exp_date')->nullable();

            $table->String('benefit_type')->nullable();
            $table->String('source')->nullable();
            $table->String('amount')->nullable();
            $table->String('start_benefit_date')->nullable();
            $table->String('end_benefit_date')->nullable();

            $table->String('course')->nullable();
            $table->String('course_start_date')->nullable();
            $table->String('course_end_date')->nullable();
            $table->String('who_request')->nullable();
            $table->String('cert_date')->nullable();
            $table->String('course_status')->nullable();
            $table->String('evaluation')->nullable();
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

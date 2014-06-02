<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons',function($table){
            $table->increments('id');
            $table->integer('position_id')->references('id')->on('position')->nullable();
            $table->String('firstname')->nullable();
            $table->String('surname')->nullable();
            $table->String('othername')->nullable();
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
            $table->String('next_kn_fax_no')->nullable();
            $table->String('next_kn_notes')->nullable();
            $table->String('action_taken')->nullable();
            $table->String('reason')->nullable();
            $table->String('action_start')->nullable();
            $table->String('action_end')->nullable();
            $table->String('date_of_discussion')->nullable();
            $table->String('notes')->nullable();

            $table->String('mobile_phone')->nullable();
            $table->String('telephone')->nullable();
            $table->String('email')->nullable();
            $table->String('fax')->nullable();
            $table->String('mailing_address')->nullable();
            $table->String('offc_mobile_phone')->nullable();
            $table->String('offc_telephone')->nullable();
            $table->String('offc_email')->nullable();
            $table->String('offc_fax')->nullable();
            $table->String('offc_mailing_address')->nullable();

            $table->String('basic_edu')->nullable();
            $table->String('profession')->nullable();
            $table->String('date_first')->nullable();
            $table->String('date_last')->nullable();
            $table->String('employ_status')->nullable();
            $table->String('employ_type')->nullable();
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
        Schema::drop('persons');
    }

}

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
            $table->String('firstname');
            $table->String('sirname');
            $table->String('othername');
            $table->String('nationality');
            $table->String('residence');
            $table->String('place_of_domicile');
            $table->String('date_of_birth');
            $table->String('gender');
            $table->String('marital_status');
            $table->String('number_of_dependence');
            $table->String('dissability');
            $table->String('photo');
            $table->String('next_kn_name');
            $table->String('relationship');
            $table->String('next_kn_email');
            $table->String('next_kn_mailingAddress');
            $table->String('next_kn_mob_no');
            $table->String('next_kn_tel_no');
            $table->String('next_kn_fax_no');
            $table->String('next_kn_notes');
            $table->String('action_taken');
            $table->String('reason');
            $table->String('action_start');
            $table->String('action_end');
            $table->String('date_of_discussion');
            $table->String('notes');

            $table->String('mobile_phone');
            $table->String('telephone');
            $table->String('email');
            $table->String('fax');
            $table->String('mailing_address');
            $table->String('offc_mobile_phone');
            $table->String('offc_telephone');
            $table->String('offc_email');
            $table->String('offc_fax');
            $table->String('offc_mailing_address');

            $table->String('basic_edu');
            $table->String('profession');
            $table->String('date_first');
            $table->String('date_last');
            $table->String('employ_status');
            $table->String('employ_type');
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
        //
    }

}

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
            $table->String('name')->nullable();
            $table->String('facility')->nullable();
            $table->String('proposed_hiring_date')->nullable();
            $table->String('status')->nullable();
            $table->String('proposed_salary')->nullable();
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

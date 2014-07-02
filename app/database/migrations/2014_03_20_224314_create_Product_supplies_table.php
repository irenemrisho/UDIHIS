<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSuppliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	Schema::create('product_supplies',function($table){
		$table->increments('id');
		$table->integer('product_id')->nullable();
         $table->foreign('product_id')->references('id')->on('products')
        ->onDelete('cascade')
	    ->onUpdate('cascade');
	    $table->integer('user_id')->nullable();
        $table->foreign('user_id')->references('id')->on('users')
        ->onDelete('cascade')
	    ->onUpdate('cascade');
        $table->String('quantity');
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
		Schema::drop('product_supplies');
	}

}

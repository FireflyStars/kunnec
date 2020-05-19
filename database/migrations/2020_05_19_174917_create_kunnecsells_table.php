<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKunnecsellsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kunnecsells', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('price', 191)->nullable();
			$table->integer('category_id')->unsigned()->nullable();
			$table->integer('subcategory_id')->nullable();
			$table->string('phone', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->integer('country');
			$table->integer('city')->unsigned()->nullable();
			$table->integer('state')->unsigned()->nullable();
			$table->string('condtion')->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('model')->nullable();
			$table->string('brand')->nullable();
			$table->integer('user_id')->unsigned()->nullable();
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
		Schema::drop('kunnecsells');
	}

}

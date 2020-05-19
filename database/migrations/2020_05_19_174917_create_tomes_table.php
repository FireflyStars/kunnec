<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTomesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tomes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->integer('jobcategory')->nullable();
			$table->integer('jobsubcat')->nullable();
			$table->string('jobtype', 191)->nullable();
			$table->integer('hrate')->nullable();
			$table->text('skill', 65535)->nullable();
			$table->integer('Salary')->nullable();
			$table->string('jobdoc')->nullable();
			$table->date('lastdate')->nullable();
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
		Schema::drop('tomes');
	}

}

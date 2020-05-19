<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fname')->nullable();
			$table->string('lname', 191)->nullable();
			$table->string('email', 191)->nullable()->unique();
			$table->string('password', 191)->nullable();
			$table->integer('ph')->nullable();
			$table->date('dob')->nullable();
			$table->integer('city')->unsigned()->nullable();
			$table->integer('state')->unsigned()->nullable();
			$table->integer('country')->unsigned()->nullable();
			$table->string('plan', 11)->nullable();
			$table->string('gender', 100)->nullable();
			$table->string('dp')->nullable();
			$table->integer('is_activated')->nullable();
			$table->string('remember_token', 100)->nullable();
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

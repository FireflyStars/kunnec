<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialmediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('socialmedia', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('facebook', 191);
			$table->string('instagram', 191);
			$table->string('twitter', 191);
			$table->string('youtube', 191);
			$table->string('soundcloud', 191);
			$table->string('github', 191);
			$table->string('gplus', 191);
			$table->string('tumblr', 191);
			$table->string('pintrest', 191);
			$table->string('linkdn', 191);
			$table->string('reddit', 191);
			$table->integer('user_id')->unsigned();
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
		Schema::drop('socialmedia');
	}

}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date');
            $table->time('end_time');
            $table->date('reg_deadline');
            $table->timeTz('zone');
            $table->string('vuene');
            $table->string('address');
            $table->integer('city_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->string('description');
            $table->string('organizer');
            $table->string('sponsors');
            $table->string('event_type');
            $table->string('event_topic');
            $table->string('tags');
            $table->string('listing_privacy');
            $table->integer('e_v_p');
            $table->integer('e_mp_p_m');
            $table->integer('remaining_ticket');
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
        Schema::dropIfExists('events');
    }
}

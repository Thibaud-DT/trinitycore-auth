<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->primary()->comment('Entry of the game event');
			$table->dateTime('start_time')->default('0000-00-00 00:00:00')->comment('Absolute start date, the event will never start before');
			$table->dateTime('end_time')->default('0000-00-00 00:00:00')->comment('Absolute end date, the event will never start afler');
			$table->bigInteger('occurence')->unsigned()->default(5184000)->comment('Delay in minutes between occurences of the event');
			$table->bigInteger('length')->unsigned()->default(2592000)->comment('Length in minutes of the event');
			$table->integer('holiday')->unsigned()->default(0)->comment('Client side holiday id');
			$table->string('description')->nullable()->comment('Description of the event displayed in console');
			$table->boolean('world_event')->default(0)->comment('0 if normal event, 1 if world event');
			$table->boolean('announce')->nullable()->default(2)->comment('0 dont announce, 1 announce, 2 value from config');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event');
	}

}

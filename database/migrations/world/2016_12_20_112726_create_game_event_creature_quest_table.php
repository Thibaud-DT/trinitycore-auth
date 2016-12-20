<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventCreatureQuestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_creature_quest', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event.');
			$table->integer('id')->unsigned()->default(0);
			$table->integer('quest')->unsigned()->default(0);
			$table->primary(['id','quest']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_creature_quest');
	}

}

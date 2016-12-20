<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventCreatureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_creature', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event. Put negative entry to remove during event.');
			$table->integer('guid')->unsigned();
			$table->primary(['guid','eventEntry']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_creature');
	}

}

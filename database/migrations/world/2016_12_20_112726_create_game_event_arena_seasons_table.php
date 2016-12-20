<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventArenaSeasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_arena_seasons', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event');
			$table->boolean('season')->comment('Arena season number');
			$table->unique(['season','eventEntry'], 'season');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_arena_seasons');
	}

}

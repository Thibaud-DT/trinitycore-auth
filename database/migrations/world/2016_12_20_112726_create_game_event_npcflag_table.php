<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventNpcflagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_npcflag', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event');
			$table->integer('guid')->unsigned()->default(0);
			$table->integer('npcflag')->unsigned()->default(0);
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
		Schema::connection('world')->drop('game_event_npcflag');
	}

}

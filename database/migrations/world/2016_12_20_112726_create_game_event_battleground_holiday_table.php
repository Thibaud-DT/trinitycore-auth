<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventBattlegroundHolidayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_battleground_holiday', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->primary()->comment('Entry of the game event');
			$table->integer('bgflag')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_battleground_holiday');
	}

}

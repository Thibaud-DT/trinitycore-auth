<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventSeasonalQuestrelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_seasonal_questrelation', function(Blueprint $table)
		{
			$table->integer('questId')->unsigned()->index('idx_quest')->comment('Quest Identifier');
			$table->integer('eventEntry')->unsigned()->default(0)->comment('Entry of the game event');
			$table->primary(['questId','eventEntry']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_seasonal_questrelation');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventQuestConditionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_quest_condition', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event.');
			$table->integer('quest')->unsigned()->default(0)->primary();
			$table->integer('condition_id')->unsigned()->default(0);
			$table->float('num', 10, 0)->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_quest_condition');
	}

}

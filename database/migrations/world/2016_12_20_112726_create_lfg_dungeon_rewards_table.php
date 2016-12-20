<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLfgDungeonRewardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('lfg_dungeon_rewards', function(Blueprint $table)
		{
			$table->integer('dungeonId')->unsigned()->default(0)->comment('Dungeon entry from dbc');
			$table->boolean('maxLevel')->default(0)->comment('Max level at which this reward is rewarded');
			$table->integer('firstQuestId')->unsigned()->default(0)->comment('Quest id with rewards for first dungeon this day');
			$table->integer('otherQuestId')->unsigned()->default(0)->comment('Quest id with rewards for Nth dungeon this day');
			$table->primary(['dungeonId','maxLevel']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('lfg_dungeon_rewards');
	}

}

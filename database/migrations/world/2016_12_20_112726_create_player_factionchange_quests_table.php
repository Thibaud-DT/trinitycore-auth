<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerFactionchangeQuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_factionchange_quests', function(Blueprint $table)
		{
			$table->integer('alliance_id')->unsigned()->unique('alliance_uniq');
			$table->integer('horde_id')->unsigned()->unique('horde_uniq');
			$table->primary(['alliance_id','horde_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('player_factionchange_quests');
	}

}

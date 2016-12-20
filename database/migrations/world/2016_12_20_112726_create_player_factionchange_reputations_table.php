<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerFactionchangeReputationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_factionchange_reputations', function(Blueprint $table)
		{
			$table->integer('alliance_id')->unsigned();
			$table->integer('horde_id')->unsigned();
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
		Schema::connection('world')->drop('player_factionchange_reputations');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameGraveyardZoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_graveyard_zone', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0);
			$table->integer('ghost_zone')->unsigned()->default(0);
			$table->smallInteger('faction')->unsigned()->default(0);
			$table->primary(['id','ghost_zone']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_graveyard_zone');
	}

}

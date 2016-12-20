<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventPoolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_pool', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event. Put negative entry to remove during event.');
			$table->integer('pool_entry')->unsigned()->default(0)->primary()->comment('Id of the pool');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_pool');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventConditionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_condition', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event');
			$table->integer('condition_id')->unsigned()->default(0);
			$table->float('req_num', 10, 0)->nullable()->default(0);
			$table->smallInteger('max_world_state_field')->unsigned()->default(0);
			$table->smallInteger('done_world_state_field')->unsigned()->default(0);
			$table->string('description', 25)->default('');
			$table->primary(['eventEntry','condition_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_condition');
	}

}

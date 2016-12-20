<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventConditionSaveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('game_event_condition_save', function(Blueprint $table)
		{
			$table->boolean('eventEntry');
			$table->integer('condition_id')->unsigned()->default(0);
			$table->float('done', 10, 0)->nullable()->default(0);
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
		Schema::connection('characters')->drop('game_event_condition_save');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventPrerequisiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_prerequisite', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event');
			$table->integer('prerequisite_event')->unsigned();
			$table->primary(['eventEntry','prerequisite_event']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_prerequisite');
	}

}

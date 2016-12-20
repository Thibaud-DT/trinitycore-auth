<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventModelEquipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_model_equip', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event.');
			$table->integer('guid')->unsigned()->default(0)->primary();
			$table->integer('modelid')->unsigned()->default(0);
			$table->boolean('equipment_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_model_equip');
	}

}

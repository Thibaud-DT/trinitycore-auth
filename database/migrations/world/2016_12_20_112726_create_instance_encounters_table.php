<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstanceEncountersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('instance_encounters', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->primary()->comment('Unique entry from DungeonEncounter.dbc');
			$table->boolean('creditType')->default(0);
			$table->integer('creditEntry')->unsigned()->default(0);
			$table->smallInteger('lastEncounterDungeon')->unsigned()->default(0)->comment('If not 0, LfgDungeon.dbc entry for the instance it is last encounter in');
			$table->string('comment')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('instance_encounters');
	}

}

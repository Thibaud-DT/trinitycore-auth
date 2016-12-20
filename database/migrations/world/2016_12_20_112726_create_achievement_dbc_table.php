<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchievementDbcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('achievement_dbc', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->primary();
			$table->integer('requiredFaction')->default(-1);
			$table->integer('mapID')->default(-1);
			$table->integer('points')->unsigned()->default(0);
			$table->integer('flags')->unsigned()->default(0);
			$table->integer('count')->unsigned()->default(0);
			$table->integer('refAchievement')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('achievement_dbc');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArenaTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('arena_team', function(Blueprint $table)
		{
			$table->integer('arenaTeamId')->unsigned()->default(0)->primary();
			$table->string('name', 24);
			$table->integer('captainGuid')->unsigned()->default(0);
			$table->boolean('type')->default(0);
			$table->smallInteger('rating')->unsigned()->default(0);
			$table->smallInteger('seasonGames')->unsigned()->default(0);
			$table->smallInteger('seasonWins')->unsigned()->default(0);
			$table->smallInteger('weekGames')->unsigned()->default(0);
			$table->smallInteger('weekWins')->unsigned()->default(0);
			$table->integer('rank')->unsigned()->default(0);
			$table->integer('backgroundColor')->unsigned()->default(0);
			$table->boolean('emblemStyle')->default(0);
			$table->integer('emblemColor')->unsigned()->default(0);
			$table->boolean('borderStyle')->default(0);
			$table->integer('borderColor')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('arena_team');
	}

}

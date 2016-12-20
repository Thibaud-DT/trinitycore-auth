<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArenaTeamMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('arena_team_member', function(Blueprint $table)
		{
			$table->integer('arenaTeamId')->unsigned()->default(0);
			$table->integer('guid')->unsigned()->default(0);
			$table->smallInteger('weekGames')->unsigned()->default(0);
			$table->smallInteger('weekWins')->unsigned()->default(0);
			$table->smallInteger('seasonGames')->unsigned()->default(0);
			$table->smallInteger('seasonWins')->unsigned()->default(0);
			$table->smallInteger('personalRating')->unsigned()->default(0);
			$table->primary(['arenaTeamId','guid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('arena_team_member');
	}

}

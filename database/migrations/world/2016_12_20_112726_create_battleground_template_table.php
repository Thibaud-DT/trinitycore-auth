<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBattlegroundTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('battleground_template', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->smallInteger('MinPlayersPerTeam')->unsigned()->default(0);
			$table->smallInteger('MaxPlayersPerTeam')->unsigned()->default(0);
			$table->boolean('MinLvl')->default(0);
			$table->boolean('MaxLvl')->default(0);
			$table->integer('AllianceStartLoc')->unsigned();
			$table->float('AllianceStartO', 10, 0);
			$table->integer('HordeStartLoc')->unsigned();
			$table->float('HordeStartO', 10, 0);
			$table->float('StartMaxDist', 10, 0)->default(0);
			$table->boolean('Weight')->default(1);
			$table->char('ScriptName', 64)->default('');
			$table->char('Comment', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('battleground_template');
	}

}

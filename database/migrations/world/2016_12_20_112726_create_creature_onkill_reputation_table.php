<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureOnkillReputationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_onkill_reputation', function(Blueprint $table)
		{
			$table->integer('creature_id')->unsigned()->default(0)->primary()->comment('Creature Identifier');
			$table->smallInteger('RewOnKillRepFaction1')->default(0);
			$table->smallInteger('RewOnKillRepFaction2')->default(0);
			$table->boolean('MaxStanding1')->default(0);
			$table->boolean('IsTeamAward1')->default(0);
			$table->integer('RewOnKillRepValue1')->default(0);
			$table->boolean('MaxStanding2')->default(0);
			$table->boolean('IsTeamAward2')->default(0);
			$table->integer('RewOnKillRepValue2')->default(0);
			$table->boolean('TeamDependent')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_onkill_reputation');
	}

}

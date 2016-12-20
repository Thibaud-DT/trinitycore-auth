<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_stats', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary()->comment('Global Unique Identifier, Low part');
			$table->integer('maxhealth')->unsigned()->default(0);
			$table->integer('maxpower1')->unsigned()->default(0);
			$table->integer('maxpower2')->unsigned()->default(0);
			$table->integer('maxpower3')->unsigned()->default(0);
			$table->integer('maxpower4')->unsigned()->default(0);
			$table->integer('maxpower5')->unsigned()->default(0);
			$table->integer('maxpower6')->unsigned()->default(0);
			$table->integer('maxpower7')->unsigned()->default(0);
			$table->integer('strength')->unsigned()->default(0);
			$table->integer('agility')->unsigned()->default(0);
			$table->integer('stamina')->unsigned()->default(0);
			$table->integer('intellect')->unsigned()->default(0);
			$table->integer('spirit')->unsigned()->default(0);
			$table->integer('armor')->unsigned()->default(0);
			$table->integer('resHoly')->unsigned()->default(0);
			$table->integer('resFire')->unsigned()->default(0);
			$table->integer('resNature')->unsigned()->default(0);
			$table->integer('resFrost')->unsigned()->default(0);
			$table->integer('resShadow')->unsigned()->default(0);
			$table->integer('resArcane')->unsigned()->default(0);
			$table->float('blockPct', 10, 0)->unsigned()->default(0);
			$table->float('dodgePct', 10, 0)->unsigned()->default(0);
			$table->float('parryPct', 10, 0)->unsigned()->default(0);
			$table->float('critPct', 10, 0)->unsigned()->default(0);
			$table->float('rangedCritPct', 10, 0)->unsigned()->default(0);
			$table->float('spellCritPct', 10, 0)->unsigned()->default(0);
			$table->integer('attackPower')->unsigned()->default(0);
			$table->integer('rangedAttackPower')->unsigned()->default(0);
			$table->integer('spellPower')->unsigned()->default(0);
			$table->integer('resilience')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_stats');
	}

}

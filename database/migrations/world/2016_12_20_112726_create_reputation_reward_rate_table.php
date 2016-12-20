<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReputationRewardRateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('reputation_reward_rate', function(Blueprint $table)
		{
			$table->integer('faction')->unsigned()->default(0)->primary();
			$table->float('quest_rate', 10, 0)->default(1);
			$table->float('quest_daily_rate', 10, 0)->default(1);
			$table->float('quest_weekly_rate', 10, 0)->default(1);
			$table->float('quest_monthly_rate', 10, 0)->default(1);
			$table->float('quest_repeatable_rate', 10, 0)->default(1);
			$table->float('creature_rate', 10, 0)->default(1);
			$table->float('spell_rate', 10, 0)->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('reputation_reward_rate');
	}

}

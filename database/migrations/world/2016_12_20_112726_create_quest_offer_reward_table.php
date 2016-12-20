<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestOfferRewardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_offer_reward', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->smallInteger('Emote1')->unsigned()->default(0);
			$table->smallInteger('Emote2')->unsigned()->default(0);
			$table->smallInteger('Emote3')->unsigned()->default(0);
			$table->smallInteger('Emote4')->unsigned()->default(0);
			$table->integer('EmoteDelay1')->unsigned()->default(0);
			$table->integer('EmoteDelay2')->unsigned()->default(0);
			$table->integer('EmoteDelay3')->unsigned()->default(0);
			$table->integer('EmoteDelay4')->unsigned()->default(0);
			$table->text('RewardText', 65535)->nullable();
			$table->smallInteger('VerifiedBuild')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('quest_offer_reward');
	}

}

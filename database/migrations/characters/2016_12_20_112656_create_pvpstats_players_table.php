<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePvpstatsPlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('pvpstats_players', function(Blueprint $table)
		{
			$table->bigInteger('battleground_id')->unsigned();
			$table->integer('character_guid')->unsigned();
			$table->boolean('winner', 1);
			$table->integer('score_killing_blows')->unsigned();
			$table->integer('score_deaths')->unsigned();
			$table->integer('score_honorable_kills')->unsigned();
			$table->integer('score_bonus_honor')->unsigned();
			$table->integer('score_damage_done')->unsigned();
			$table->integer('score_healing_done')->unsigned();
			$table->integer('attr_1')->unsigned()->default(0);
			$table->integer('attr_2')->unsigned()->default(0);
			$table->integer('attr_3')->unsigned()->default(0);
			$table->integer('attr_4')->unsigned()->default(0);
			$table->integer('attr_5')->unsigned()->default(0);
			$table->primary(['battleground_id','character_guid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('pvpstats_players');
	}

}

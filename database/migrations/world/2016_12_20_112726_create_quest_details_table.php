<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_details', function(Blueprint $table)
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
		Schema::connection('world')->drop('quest_details');
	}

}

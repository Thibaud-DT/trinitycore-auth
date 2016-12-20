<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('groups', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->primary();
			$table->integer('leaderGuid')->unsigned()->index('leaderGuid');
			$table->boolean('lootMethod');
			$table->integer('looterGuid')->unsigned();
			$table->boolean('lootThreshold');
			$table->bigInteger('icon1')->unsigned();
			$table->bigInteger('icon2')->unsigned();
			$table->bigInteger('icon3')->unsigned();
			$table->bigInteger('icon4')->unsigned();
			$table->bigInteger('icon5')->unsigned();
			$table->bigInteger('icon6')->unsigned();
			$table->bigInteger('icon7')->unsigned();
			$table->bigInteger('icon8')->unsigned();
			$table->boolean('groupType');
			$table->boolean('difficulty')->default(0);
			$table->boolean('raidDifficulty')->default(0);
			$table->integer('masterLooterGuid')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('groups');
	}

}

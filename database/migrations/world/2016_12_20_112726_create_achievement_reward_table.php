<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchievementRewardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('achievement_reward', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->integer('title_A')->unsigned()->default(0);
			$table->integer('title_H')->unsigned()->default(0);
			$table->integer('item')->unsigned()->default(0);
			$table->integer('sender')->unsigned()->default(0);
			$table->string('subject')->nullable();
			$table->text('text', 65535)->nullable();
			$table->integer('mailTemplate')->unsigned()->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('achievement_reward');
	}

}

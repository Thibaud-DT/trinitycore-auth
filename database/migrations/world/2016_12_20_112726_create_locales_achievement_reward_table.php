<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesAchievementRewardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_achievement_reward', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->string('subject_loc1', 100)->default('');
			$table->string('subject_loc2', 100)->default('');
			$table->string('subject_loc3', 100)->default('');
			$table->string('subject_loc4', 100)->default('');
			$table->string('subject_loc5', 100)->default('');
			$table->string('subject_loc6', 100)->default('');
			$table->string('subject_loc7', 100)->default('');
			$table->string('subject_loc8', 100)->default('');
			$table->text('text_loc1', 65535)->nullable();
			$table->text('text_loc2', 65535)->nullable();
			$table->text('text_loc3', 65535)->nullable();
			$table->text('text_loc4', 65535)->nullable();
			$table->text('text_loc5', 65535)->nullable();
			$table->text('text_loc6', 65535)->nullable();
			$table->text('text_loc7', 65535)->nullable();
			$table->text('text_loc8', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('locales_achievement_reward');
	}

}

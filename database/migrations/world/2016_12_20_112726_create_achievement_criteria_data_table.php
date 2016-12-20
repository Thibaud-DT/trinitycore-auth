<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchievementCriteriaDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('achievement_criteria_data', function(Blueprint $table)
		{
			$table->integer('criteria_id');
			$table->boolean('type')->default(0);
			$table->integer('value1')->unsigned()->default(0);
			$table->integer('value2')->unsigned()->default(0);
			$table->char('ScriptName', 64)->default('');
			$table->primary(['criteria_id','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('achievement_criteria_data');
	}

}

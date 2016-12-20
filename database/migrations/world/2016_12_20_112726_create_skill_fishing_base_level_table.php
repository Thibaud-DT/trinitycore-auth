<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillFishingBaseLevelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('skill_fishing_base_level', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary()->comment('Area identifier');
			$table->smallInteger('skill')->default(0)->comment('Base skill level requirement');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('skill_fishing_base_level');
	}

}

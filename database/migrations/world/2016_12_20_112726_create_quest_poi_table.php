<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestPoiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_poi', function(Blueprint $table)
		{
			$table->integer('QuestID')->unsigned()->default(0);
			$table->integer('id')->unsigned()->default(0);
			$table->integer('ObjectiveIndex')->default(0);
			$table->integer('MapID')->unsigned()->default(0);
			$table->integer('WorldMapAreaId')->unsigned()->default(0);
			$table->integer('Floor')->unsigned()->default(0);
			$table->integer('Priority')->unsigned()->default(0);
			$table->integer('Flags')->unsigned()->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
			$table->primary(['QuestID','id']);
			$table->index(['QuestID','id'], 'idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('quest_poi');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestPoiPointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_poi_points', function(Blueprint $table)
		{
			$table->integer('QuestID')->unsigned()->default(0);
			$table->integer('Idx1')->unsigned()->default(0);
			$table->integer('Idx2')->unsigned()->default(0);
			$table->integer('X')->default(0);
			$table->integer('Y')->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
			$table->primary(['QuestID','Idx1','Idx2']);
			$table->index(['QuestID','Idx1'], 'questId_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('quest_poi_points');
	}

}

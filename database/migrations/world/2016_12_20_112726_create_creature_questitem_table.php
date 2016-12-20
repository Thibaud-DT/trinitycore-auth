<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureQuestitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_questitem', function(Blueprint $table)
		{
			$table->integer('CreatureEntry')->unsigned()->default(0);
			$table->integer('Idx')->unsigned()->default(0);
			$table->integer('ItemId')->unsigned()->default(0);
			$table->smallInteger('VerifiedBuild')->default(0);
			$table->primary(['CreatureEntry','Idx']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_questitem');
	}

}

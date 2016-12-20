<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameobjectQuestitemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gameobject_questitem', function(Blueprint $table)
		{
			$table->integer('GameObjectEntry')->unsigned()->default(0);
			$table->integer('Idx')->unsigned()->default(0);
			$table->integer('ItemId')->unsigned()->default(0);
			$table->smallInteger('VerifiedBuild')->default(0);
			$table->primary(['GameObjectEntry','Idx']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('gameobject_questitem');
	}

}

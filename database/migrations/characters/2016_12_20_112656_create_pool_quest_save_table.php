<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoolQuestSaveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('pool_quest_save', function(Blueprint $table)
		{
			$table->integer('pool_id')->unsigned()->default(0);
			$table->integer('quest_id')->unsigned()->default(0);
			$table->primary(['pool_id','quest_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('pool_quest_save');
	}

}

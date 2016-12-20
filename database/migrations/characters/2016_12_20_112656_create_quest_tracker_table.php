<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestTrackerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('quest_tracker', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0);
			$table->integer('character_guid')->unsigned()->default(0);
			$table->dateTime('quest_accept_time');
			$table->dateTime('quest_complete_time')->nullable();
			$table->dateTime('quest_abandon_time')->nullable();
			$table->boolean('completed_by_gm')->default(0);
			$table->string('core_hash', 120)->default('0');
			$table->string('core_revision', 120)->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('quest_tracker');
	}

}

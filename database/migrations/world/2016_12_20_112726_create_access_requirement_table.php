<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessRequirementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('access_requirement', function(Blueprint $table)
		{
			$table->integer('mapId')->unsigned();
			$table->boolean('difficulty')->default(0);
			$table->boolean('level_min')->default(0);
			$table->boolean('level_max')->default(0);
			$table->smallInteger('item_level')->unsigned()->default(0);
			$table->integer('item')->unsigned()->default(0);
			$table->integer('item2')->unsigned()->default(0);
			$table->integer('quest_done_A')->unsigned()->default(0);
			$table->integer('quest_done_H')->unsigned()->default(0);
			$table->integer('completed_achievement')->unsigned()->default(0);
			$table->text('quest_failed_text', 65535)->nullable();
			$table->text('comment', 65535)->nullable();
			$table->primary(['mapId','difficulty']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('access_requirement');
	}

}

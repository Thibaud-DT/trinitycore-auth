<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePickpocketingLootTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pickpocketing_loot_template', function(Blueprint $table)
		{
			$table->integer('Entry')->unsigned()->default(0);
			$table->integer('Item')->unsigned()->default(0);
			$table->integer('Reference')->unsigned()->default(0);
			$table->float('Chance', 10, 0)->default(100);
			$table->boolean('QuestRequired')->default(0);
			$table->smallInteger('LootMode')->unsigned()->default(1);
			$table->boolean('GroupId')->default(0);
			$table->boolean('MinCount')->default(1);
			$table->boolean('MaxCount')->default(1);
			$table->string('Comment')->nullable();
			$table->primary(['Entry','Item']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('pickpocketing_loot_template');
	}

}

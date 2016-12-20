<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillExtraItemTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('skill_extra_item_template', function(Blueprint $table)
		{
			$table->integer('spellId')->unsigned()->default(0)->primary()->comment('SpellId of the item creation spell');
			$table->integer('requiredSpecialization')->unsigned()->default(0)->comment('Specialization spell id');
			$table->float('additionalCreateChance', 10, 0)->default(0)->comment('chance to create add');
			$table->boolean('additionalMaxNum')->default(0)->comment('max num of adds');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('skill_extra_item_template');
	}

}

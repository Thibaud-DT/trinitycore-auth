<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillPerfectItemTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('skill_perfect_item_template', function(Blueprint $table)
		{
			$table->integer('spellId')->unsigned()->default(0)->primary()->comment('SpellId of the item creation spell');
			$table->integer('requiredSpecialization')->unsigned()->default(0)->comment('Specialization spell id');
			$table->float('perfectCreateChance', 10, 0)->default(0)->comment('chance to create the perfect item instead');
			$table->integer('perfectItemType')->unsigned()->default(0)->comment('perfect item type to create instead');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('skill_perfect_item_template');
	}

}

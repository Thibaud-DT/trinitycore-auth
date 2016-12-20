<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestTemplateAddonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_template_addon', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->boolean('MaxLevel')->default(0);
			$table->integer('AllowableClasses')->unsigned()->default(0);
			$table->integer('SourceSpellID')->unsigned()->default(0);
			$table->integer('PrevQuestID')->default(0);
			$table->integer('NextQuestID')->default(0);
			$table->integer('ExclusiveGroup')->default(0);
			$table->integer('RewardMailTemplateID')->unsigned()->default(0);
			$table->integer('RewardMailDelay')->unsigned()->default(0);
			$table->smallInteger('RequiredSkillID')->unsigned()->default(0);
			$table->smallInteger('RequiredSkillPoints')->unsigned()->default(0);
			$table->smallInteger('RequiredMinRepFaction')->unsigned()->default(0);
			$table->smallInteger('RequiredMaxRepFaction')->unsigned()->default(0);
			$table->integer('RequiredMinRepValue')->default(0);
			$table->integer('RequiredMaxRepValue')->default(0);
			$table->boolean('ProvidedItemCount')->default(0);
			$table->boolean('SpecialFlags')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('quest_template_addon');
	}

}

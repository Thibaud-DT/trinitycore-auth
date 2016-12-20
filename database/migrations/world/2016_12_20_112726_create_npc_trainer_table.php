<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpcTrainerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('npc_trainer', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0);
			$table->integer('SpellID')->default(0);
			$table->integer('MoneyCost')->unsigned()->default(0);
			$table->smallInteger('ReqSkillLine')->unsigned()->default(0);
			$table->smallInteger('ReqSkillRank')->unsigned()->default(0);
			$table->boolean('ReqLevel')->default(0);
			$table->primary(['ID','SpellID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('npc_trainer');
	}

}

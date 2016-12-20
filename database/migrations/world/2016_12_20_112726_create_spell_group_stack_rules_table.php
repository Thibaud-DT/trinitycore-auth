<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellGroupStackRulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_group_stack_rules', function(Blueprint $table)
		{
			$table->integer('group_id')->unsigned()->default(0)->primary();
			$table->boolean('stack_rule')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_group_stack_rules');
	}

}

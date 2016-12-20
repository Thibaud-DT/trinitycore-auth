<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellAreaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_area', function(Blueprint $table)
		{
			$table->integer('spell')->unsigned()->default(0);
			$table->integer('area')->unsigned()->default(0);
			$table->integer('quest_start')->unsigned()->default(0);
			$table->integer('quest_end')->unsigned()->default(0);
			$table->integer('aura_spell')->default(0);
			$table->integer('racemask')->unsigned()->default(0);
			$table->boolean('gender')->default(2);
			$table->boolean('autocast')->default(0);
			$table->integer('quest_start_status')->default(64);
			$table->integer('quest_end_status')->default(11);
			$table->primary(['spell','area','quest_start','aura_spell','racemask','gender']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_area');
	}

}

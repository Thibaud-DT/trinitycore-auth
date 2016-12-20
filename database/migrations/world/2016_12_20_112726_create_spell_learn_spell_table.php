<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellLearnSpellTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_learn_spell', function(Blueprint $table)
		{
			$table->smallInteger('entry')->unsigned()->default(0);
			$table->smallInteger('SpellID')->unsigned()->default(0);
			$table->boolean('Active')->default(1);
			$table->primary(['entry','SpellID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_learn_spell');
	}

}

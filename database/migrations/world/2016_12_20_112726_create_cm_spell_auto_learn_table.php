<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmSpellAutoLearnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('cm_spell_auto_learn', function(Blueprint $table)
		{
			$table->integer('learned')->unsigned()->default(0);
			$table->integer('tolearn')->unsigned()->default(0);
			$table->primary(['learned','tolearn']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('cm_spell_auto_learn');
	}

}

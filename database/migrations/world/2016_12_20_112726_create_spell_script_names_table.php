<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellScriptNamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_script_names', function(Blueprint $table)
		{
			$table->integer('spell_id');
			$table->char('ScriptName', 64);
			$table->unique(['spell_id','ScriptName'], 'spell_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_script_names');
	}

}

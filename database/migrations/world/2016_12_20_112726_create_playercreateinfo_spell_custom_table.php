<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayercreateinfoSpellCustomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('playercreateinfo_spell_custom', function(Blueprint $table)
		{
			$table->integer('racemask')->unsigned()->default(0);
			$table->integer('classmask')->unsigned()->default(0);
			$table->integer('Spell')->unsigned()->default(0);
			$table->string('Note')->nullable();
			$table->primary(['racemask','classmask','Spell']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('playercreateinfo_spell_custom');
	}

}

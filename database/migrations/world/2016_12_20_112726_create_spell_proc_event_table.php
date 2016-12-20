<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellProcEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_proc_event', function(Blueprint $table)
		{
			$table->integer('entry')->default(0)->primary();
			$table->boolean('SchoolMask')->default(0);
			$table->smallInteger('SpellFamilyName')->unsigned()->default(0);
			$table->integer('SpellFamilyMask0')->unsigned()->default(0);
			$table->integer('SpellFamilyMask1')->unsigned()->default(0);
			$table->integer('SpellFamilyMask2')->unsigned()->default(0);
			$table->integer('procFlags')->unsigned()->default(0);
			$table->integer('procEx')->unsigned()->default(0);
			$table->float('ppmRate', 10, 0)->default(0);
			$table->float('CustomChance', 10, 0)->default(0);
			$table->integer('Cooldown')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_proc_event');
	}

}

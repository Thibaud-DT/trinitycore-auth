<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellProcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_proc', function(Blueprint $table)
		{
			$table->integer('spellId')->default(0)->primary();
			$table->boolean('schoolMask')->default(0);
			$table->smallInteger('spellFamilyName')->unsigned()->default(0);
			$table->integer('spellFamilyMask0')->unsigned()->default(0);
			$table->integer('spellFamilyMask1')->unsigned()->default(0);
			$table->integer('spellFamilyMask2')->unsigned()->default(0);
			$table->integer('typeMask')->unsigned()->default(0);
			$table->integer('spellTypeMask')->unsigned()->default(0);
			$table->integer('spellPhaseMask')->default(0);
			$table->integer('hitMask')->default(0);
			$table->integer('attributesMask')->unsigned()->default(0);
			$table->float('ratePerMinute', 10, 0)->default(0);
			$table->float('chance', 10, 0)->default(0);
			$table->float('cooldown', 10, 0)->unsigned()->default(0);
			$table->integer('charges')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_proc');
	}

}

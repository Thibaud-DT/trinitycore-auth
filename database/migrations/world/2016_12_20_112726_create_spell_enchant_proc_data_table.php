<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellEnchantProcDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_enchant_proc_data', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->primary();
			$table->integer('customChance')->unsigned()->default(0);
			$table->float('PPMChance', 10, 0)->unsigned()->default(0);
			$table->integer('procEx')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_enchant_proc_data');
	}

}

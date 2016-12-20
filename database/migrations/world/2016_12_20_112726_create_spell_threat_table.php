<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellThreatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_threat', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->primary();
			$table->integer('flatMod')->nullable();
			$table->float('pctMod', 10, 0)->default(1)->comment('threat multiplier for damage/healing');
			$table->float('apPctMod', 10, 0)->default(0)->comment('additional threat bonus from attack power');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_threat');
	}

}

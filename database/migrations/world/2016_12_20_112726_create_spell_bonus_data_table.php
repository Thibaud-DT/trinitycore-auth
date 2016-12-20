<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellBonusDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_bonus_data', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->float('direct_bonus', 10, 0)->default(0);
			$table->float('dot_bonus', 10, 0)->default(0);
			$table->float('ap_bonus', 10, 0)->default(0);
			$table->float('ap_dot_bonus', 10, 0)->default(0);
			$table->string('comments')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_bonus_data');
	}

}

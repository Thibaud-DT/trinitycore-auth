<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpelldifficultyDbcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spelldifficulty_dbc', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary();
			$table->integer('spellid0')->unsigned()->default(0);
			$table->integer('spellid1')->unsigned()->default(0);
			$table->integer('spellid2')->unsigned()->default(0);
			$table->integer('spellid3')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spelldifficulty_dbc');
	}

}

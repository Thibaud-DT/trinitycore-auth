<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerLevelstatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_levelstats', function(Blueprint $table)
		{
			$table->boolean('race');
			$table->boolean('class');
			$table->boolean('level');
			$table->boolean('str');
			$table->boolean('agi');
			$table->boolean('sta');
			$table->boolean('inte');
			$table->boolean('spi');
			$table->primary(['race','class','level']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('player_levelstats');
	}

}

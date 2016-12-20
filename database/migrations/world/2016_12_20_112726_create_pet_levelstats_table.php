<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetLevelstatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pet_levelstats', function(Blueprint $table)
		{
			$table->integer('creature_entry')->unsigned();
			$table->boolean('level');
			$table->smallInteger('hp')->unsigned();
			$table->smallInteger('mana')->unsigned();
			$table->integer('armor')->unsigned()->default(0);
			$table->smallInteger('str')->unsigned();
			$table->smallInteger('agi')->unsigned();
			$table->smallInteger('sta')->unsigned();
			$table->smallInteger('inte')->unsigned();
			$table->smallInteger('spi')->unsigned();
			$table->primary(['creature_entry','level']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('pet_levelstats');
	}

}

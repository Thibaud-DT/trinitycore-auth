<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerClasslevelstatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_classlevelstats', function(Blueprint $table)
		{
			$table->boolean('class');
			$table->boolean('level');
			$table->smallInteger('basehp')->unsigned();
			$table->smallInteger('basemana')->unsigned();
			$table->primary(['class','level']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('player_classlevelstats');
	}

}

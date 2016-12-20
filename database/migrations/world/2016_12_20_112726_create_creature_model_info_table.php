<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureModelInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_model_info', function(Blueprint $table)
		{
			$table->integer('DisplayID')->unsigned()->default(0)->primary();
			$table->float('BoundingRadius', 10, 0)->default(0);
			$table->float('CombatReach', 10, 0)->default(0);
			$table->boolean('Gender')->default(2);
			$table->integer('DisplayID_Other_Gender')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_model_info');
	}

}

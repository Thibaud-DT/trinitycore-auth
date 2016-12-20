<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaypointScriptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('waypoint_scripts', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0);
			$table->integer('delay')->unsigned()->default(0);
			$table->integer('command')->unsigned()->default(0);
			$table->integer('datalong')->unsigned()->default(0);
			$table->integer('datalong2')->unsigned()->default(0);
			$table->integer('dataint')->unsigned()->default(0);
			$table->float('x', 10, 0)->default(0);
			$table->float('y', 10, 0)->default(0);
			$table->float('z', 10, 0)->default(0);
			$table->float('o', 10, 0)->default(0);
			$table->integer('guid')->default(0)->primary();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('waypoint_scripts');
	}

}

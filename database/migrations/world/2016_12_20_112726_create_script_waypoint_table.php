<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScriptWaypointTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('script_waypoint', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->comment('creature_template entry');
			$table->integer('pointid')->unsigned()->default(0);
			$table->float('location_x', 10, 0)->default(0);
			$table->float('location_y', 10, 0)->default(0);
			$table->float('location_z', 10, 0)->default(0);
			$table->integer('waittime')->unsigned()->default(0)->comment('waittime in millisecs');
			$table->text('point_comment', 65535)->nullable();
			$table->primary(['entry','pointid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('script_waypoint');
	}

}

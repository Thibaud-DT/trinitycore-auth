<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaypointsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('waypoints', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->integer('pointid')->unsigned()->default(0);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
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
		Schema::connection('world')->drop('waypoints');
	}

}

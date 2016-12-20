<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaypointDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('waypoint_data', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->comment('Creature GUID');
			$table->integer('point')->unsigned()->default(0);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->integer('delay')->unsigned()->default(0);
			$table->integer('move_type')->default(0);
			$table->integer('action')->default(0);
			$table->smallInteger('action_chance')->default(100);
			$table->integer('wpguid')->default(0);
			$table->primary(['id','point']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('waypoint_data');
	}

}

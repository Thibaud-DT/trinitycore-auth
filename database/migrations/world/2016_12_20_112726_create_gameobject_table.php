<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameobjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gameobject', function(Blueprint $table)
		{
			$table->increments('guid')->comment('Global Unique Identifier');
			$table->integer('id')->unsigned()->default(0)->comment('Gameobject Identifier');
			$table->smallInteger('map')->unsigned()->default(0)->comment('Map Identifier');
			$table->smallInteger('zoneId')->unsigned()->default(0)->comment('Zone Identifier');
			$table->smallInteger('areaId')->unsigned()->default(0)->comment('Area Identifier');
			$table->boolean('spawnMask')->default(1);
			$table->integer('phaseMask')->unsigned()->default(1);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->float('rotation0', 10, 0)->default(0);
			$table->float('rotation1', 10, 0)->default(0);
			$table->float('rotation2', 10, 0)->default(0);
			$table->float('rotation3', 10, 0)->default(0);
			$table->integer('spawntimesecs')->default(0);
			$table->boolean('animprogress')->default(0);
			$table->boolean('state')->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('gameobject');
	}

}

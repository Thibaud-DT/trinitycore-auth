<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature', function(Blueprint $table)
		{
			$table->increments('guid')->comment('Global Unique Identifier');
			$table->integer('id')->unsigned()->default(0)->index('idx_id')->comment('Creature Identifier');
			$table->smallInteger('map')->unsigned()->default(0)->index('idx_map')->comment('Map Identifier');
			$table->smallInteger('zoneId')->unsigned()->default(0)->comment('Zone Identifier');
			$table->smallInteger('areaId')->unsigned()->default(0)->comment('Area Identifier');
			$table->boolean('spawnMask')->default(1);
			$table->integer('phaseMask')->unsigned()->default(1);
			$table->integer('modelid')->unsigned()->default(0);
			$table->boolean('equipment_id')->default(0);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->integer('spawntimesecs')->unsigned()->default(120);
			$table->float('spawndist', 10, 0)->default(0);
			$table->integer('currentwaypoint')->unsigned()->default(0);
			$table->integer('curhealth')->unsigned()->default(1);
			$table->integer('curmana')->unsigned()->default(0);
			$table->boolean('MovementType')->default(0);
			$table->integer('npcflag')->unsigned()->default(0);
			$table->integer('unit_flags')->unsigned()->default(0);
			$table->integer('dynamicflags')->unsigned()->default(0);
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
		Schema::connection('world')->drop('creature');
	}

}

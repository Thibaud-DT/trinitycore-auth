<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureSummonGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_summon_groups', function(Blueprint $table)
		{
			$table->integer('summonerId')->unsigned()->default(0);
			$table->boolean('summonerType')->default(0);
			$table->boolean('groupId')->default(0);
			$table->integer('entry')->unsigned()->default(0);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->boolean('summonType')->default(0);
			$table->integer('summonTime')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_summon_groups');
	}

}

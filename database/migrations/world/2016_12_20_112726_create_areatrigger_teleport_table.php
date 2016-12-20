<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAreatriggerTeleportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('areatrigger_teleport', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->text('Name', 65535)->nullable()->index('name');
			$table->smallInteger('target_map')->unsigned()->default(0);
			$table->float('target_position_x', 10, 0)->default(0);
			$table->float('target_position_y', 10, 0)->default(0);
			$table->float('target_position_z', 10, 0)->default(0);
			$table->float('target_orientation', 10, 0)->default(0);
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
		Schema::connection('world')->drop('areatrigger_teleport');
	}

}

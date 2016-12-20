<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayercreateinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('playercreateinfo', function(Blueprint $table)
		{
			$table->boolean('race')->default(0);
			$table->boolean('class')->default(0);
			$table->smallInteger('map')->unsigned()->default(0);
			$table->integer('zone')->unsigned()->default(0);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->primary(['race','class']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('playercreateinfo');
	}

}

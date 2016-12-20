<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmAutospellcasterTargetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('cm_autospellcaster_targets', function(Blueprint $table)
		{
			$table->integer('groupID')->unsigned()->default(0);
			$table->integer('id')->unsigned()->default(0);
			$table->float('x', 10, 0)->default(0);
			$table->float('y', 10, 0)->default(0);
			$table->float('z', 10, 0)->default(0);
			$table->integer('map')->unsigned()->default(0);
			$table->primary(['groupID','id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('cm_autospellcaster_targets');
	}

}

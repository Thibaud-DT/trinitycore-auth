<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLagReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('lag_reports', function(Blueprint $table)
		{
			$table->increments('reportId');
			$table->integer('guid')->unsigned()->default(0);
			$table->boolean('lagType')->default(0);
			$table->smallInteger('mapId')->unsigned()->default(0);
			$table->float('posX', 10, 0)->default(0);
			$table->float('posY', 10, 0)->default(0);
			$table->float('posZ', 10, 0)->default(0);
			$table->integer('latency')->unsigned()->default(0);
			$table->integer('createTime')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('lag_reports');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePointsOfInterestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('points_of_interest', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->float('PositionX', 10, 0)->default(0);
			$table->float('PositionY', 10, 0)->default(0);
			$table->integer('Icon')->unsigned()->default(0);
			$table->integer('Flags')->unsigned()->default(0);
			$table->integer('Data')->unsigned()->default(0);
			$table->text('Name', 65535);
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
		Schema::connection('world')->drop('points_of_interest');
	}

}

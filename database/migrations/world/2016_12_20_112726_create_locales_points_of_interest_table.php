<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesPointsOfInterestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_points_of_interest', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->text('icon_name_loc1', 65535)->nullable();
			$table->text('icon_name_loc2', 65535)->nullable();
			$table->text('icon_name_loc3', 65535)->nullable();
			$table->text('icon_name_loc4', 65535)->nullable();
			$table->text('icon_name_loc5', 65535)->nullable();
			$table->text('icon_name_loc6', 65535)->nullable();
			$table->text('icon_name_loc7', 65535)->nullable();
			$table->text('icon_name_loc8', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('locales_points_of_interest');
	}

}

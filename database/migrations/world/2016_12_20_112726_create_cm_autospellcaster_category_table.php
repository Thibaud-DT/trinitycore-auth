<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmAutospellcasterCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('cm_autospellcaster_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('targetID')->unsigned()->default(0);
			$table->integer('spell')->unsigned()->default(0);
			$table->integer('min_time')->unsigned()->default(1000);
			$table->integer('max_time')->unsigned()->default(10000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('cm_autospellcaster_category');
	}

}

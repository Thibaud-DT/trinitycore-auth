<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpdatesIncludeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('updates_include', function(Blueprint $table)
		{
			$table->string('path', 200)->primary()->comment('directory to include. $ means relative to the source directory.');
			$table->string('state')->default('RELEASED')->comment('defines if the directory contains released or archived updates.');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('updates_include');
	}

}

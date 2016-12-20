<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCraftActiveCmdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('craft_active_cmd', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('command')->unsigned()->default(0);
			$table->boolean('count')->default(0);
			$table->boolean('remaining')->default(0);
			$table->boolean('to_loot')->default(0);
			$table->integer('player')->unsigned()->default(0);
			$table->integer('start')->unsigned()->default(0);
			$table->integer('duration')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('craft_active_cmd');
	}

}

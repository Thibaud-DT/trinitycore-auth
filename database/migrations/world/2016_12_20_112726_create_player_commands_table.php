<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerCommandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_commands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category')->unsigned()->default(0);
			$table->integer('object_guid')->unsigned()->default(0);
			$table->integer('count')->default(1);
			$table->integer('money_type')->unsigned()->default(0);
			$table->integer('cost')->unsigned()->default(0);
			$table->integer('owner')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('player_commands');
	}

}

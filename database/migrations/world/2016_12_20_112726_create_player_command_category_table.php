<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerCommandCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_command_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profession')->unsigned()->default(0);
			$table->integer('category')->unsigned()->default(0);
			$table->integer('sub_category')->unsigned()->default(0);
			$table->text('name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('player_command_category');
	}

}

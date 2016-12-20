<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCraftCommandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('craft_command', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('type')->default(0);
			$table->integer('duration')->unsigned()->default(3600);
			$table->integer('loot_id')->unsigned()->default(0);
			$table->integer('required_item')->unsigned()->default(0);
			$table->boolean('count')->default(0);
			$table->integer('reputation')->unsigned()->default(0);
			$table->integer('rep_level')->unsigned()->default(0);
			$table->integer('rep_gain')->unsigned()->default(0);
			$table->integer('skill_required')->unsigned()->default(0);
			$table->integer('skill_level')->unsigned()->default(0);
			$table->string('description')->default('Commande');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('craft_command');
	}

}

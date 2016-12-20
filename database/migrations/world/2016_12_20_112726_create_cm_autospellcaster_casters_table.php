<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmAutospellcasterCastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('cm_autospellcaster_casters', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0);
			$table->boolean('type')->default(0)->comment('gob = 0, npc = 1');
			$table->integer('category')->unsigned()->default(0);
			$table->primary(['guid','category','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('cm_autospellcaster_casters');
	}

}

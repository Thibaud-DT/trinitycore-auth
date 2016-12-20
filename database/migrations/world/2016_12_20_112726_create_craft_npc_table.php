<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCraftNpcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('craft_npc', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->boolean('command_type')->default(0);
			$table->primary(['entry','command_type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('craft_npc');
	}

}

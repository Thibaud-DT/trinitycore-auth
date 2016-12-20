<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCraftLootTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('craft_loot', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item')->unsigned()->default(0);
			$table->boolean('min')->default(0);
			$table->boolean('max')->default(0);
			$table->float('chance', 10, 0)->unsigned()->default(100);
			$table->integer('reputation_required')->unsigned()->default(0);
			$table->integer('reputation_level')->unsigned()->default(0);
			$table->primary(['id','item']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('craft_loot');
	}

}

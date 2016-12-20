<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerFactionchangeItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('player_factionchange_items', function(Blueprint $table)
		{
			$table->integer('race_A')->unsigned();
			$table->integer('alliance_id')->unsigned();
			$table->text('commentA', 65535)->nullable();
			$table->integer('race_H')->unsigned();
			$table->integer('horde_id')->unsigned();
			$table->text('commentH', 65535)->nullable();
			$table->primary(['alliance_id','horde_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('player_factionchange_items');
	}

}

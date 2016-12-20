<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameEventNpcVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_event_npc_vendor', function(Blueprint $table)
		{
			$table->boolean('eventEntry')->comment('Entry of the game event.');
			$table->integer('guid')->unsigned()->default(0);
			$table->smallInteger('slot')->default(0)->index('slot');
			$table->integer('item')->unsigned()->default(0);
			$table->integer('maxcount')->unsigned()->default(0);
			$table->integer('incrtime')->unsigned()->default(0);
			$table->integer('ExtendedCost')->unsigned()->default(0);
			$table->primary(['guid','item']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_event_npc_vendor');
	}

}

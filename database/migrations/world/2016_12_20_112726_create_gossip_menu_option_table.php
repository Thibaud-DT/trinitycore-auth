<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGossipMenuOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gossip_menu_option', function(Blueprint $table)
		{
			$table->smallInteger('menu_id')->unsigned()->default(0);
			$table->smallInteger('id')->unsigned()->default(0);
			$table->integer('option_icon')->unsigned()->default(0);
			$table->text('option_text', 65535)->nullable();
			$table->integer('OptionBroadcastTextID')->default(0);
			$table->boolean('option_id')->default(0);
			$table->integer('npc_option_npcflag')->unsigned()->default(0);
			$table->integer('action_menu_id')->unsigned()->default(0);
			$table->integer('action_poi_id')->unsigned()->default(0);
			$table->boolean('box_coded')->default(0);
			$table->integer('box_money')->unsigned()->default(0);
			$table->text('box_text', 65535)->nullable();
			$table->integer('BoxBroadcastTextID')->default(0);
			$table->primary(['menu_id','id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('gossip_menu_option');
	}

}

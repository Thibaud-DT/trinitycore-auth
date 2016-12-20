<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesGossipMenuOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_gossip_menu_option', function(Blueprint $table)
		{
			$table->smallInteger('menu_id')->unsigned()->default(0);
			$table->smallInteger('id')->unsigned()->default(0);
			$table->text('option_text_loc1', 65535)->nullable();
			$table->text('option_text_loc2', 65535)->nullable();
			$table->text('option_text_loc3', 65535)->nullable();
			$table->text('option_text_loc4', 65535)->nullable();
			$table->text('option_text_loc5', 65535)->nullable();
			$table->text('option_text_loc6', 65535)->nullable();
			$table->text('option_text_loc7', 65535)->nullable();
			$table->text('option_text_loc8', 65535)->nullable();
			$table->text('box_text_loc1', 65535)->nullable();
			$table->text('box_text_loc2', 65535)->nullable();
			$table->text('box_text_loc3', 65535)->nullable();
			$table->text('box_text_loc4', 65535)->nullable();
			$table->text('box_text_loc5', 65535)->nullable();
			$table->text('box_text_loc6', 65535)->nullable();
			$table->text('box_text_loc7', 65535)->nullable();
			$table->text('box_text_loc8', 65535)->nullable();
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
		Schema::connection('world')->drop('locales_gossip_menu_option');
	}

}

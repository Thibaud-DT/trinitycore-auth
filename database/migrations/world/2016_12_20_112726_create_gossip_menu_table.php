<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGossipMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gossip_menu', function(Blueprint $table)
		{
			$table->smallInteger('entry')->unsigned()->default(0);
			$table->integer('text_id')->unsigned()->default(0);
			$table->primary(['entry','text_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('gossip_menu');
	}

}

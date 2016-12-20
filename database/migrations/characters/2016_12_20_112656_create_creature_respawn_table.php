<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureRespawnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('creature_respawn', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Global Unique Identifier');
			$table->integer('respawnTime')->unsigned()->default(0);
			$table->smallInteger('mapId')->unsigned()->default(0);
			$table->integer('instanceId')->unsigned()->default(0)->index('idx_instance')->comment('Instance Identifier');
			$table->primary(['guid','instanceId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('creature_respawn');
	}

}

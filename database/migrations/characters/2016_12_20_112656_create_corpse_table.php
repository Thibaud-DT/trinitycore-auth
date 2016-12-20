<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCorpseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('corpse', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary()->comment('Character Global Unique Identifier');
			$table->float('posX', 10, 0)->default(0);
			$table->float('posY', 10, 0)->default(0);
			$table->float('posZ', 10, 0)->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->smallInteger('mapId')->unsigned()->default(0)->comment('Map Identifier');
			$table->integer('phaseMask')->unsigned()->default(1);
			$table->integer('displayId')->unsigned()->default(0);
			$table->text('itemCache', 65535);
			$table->integer('bytes1')->unsigned()->default(0);
			$table->integer('bytes2')->unsigned()->default(0);
			$table->integer('guildId')->unsigned()->default(0);
			$table->boolean('flags')->default(0);
			$table->boolean('dynFlags')->default(0);
			$table->integer('time')->unsigned()->default(0)->index('idx_time');
			$table->boolean('corpseType')->default(0)->index('idx_type');
			$table->integer('instanceId')->unsigned()->default(0)->index('idx_instance')->comment('Instance Identifier');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('corpse');
	}

}

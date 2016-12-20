<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterHomebindTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_homebind', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary()->comment('Global Unique Identifier');
			$table->smallInteger('mapId')->unsigned()->default(0)->comment('Map Identifier');
			$table->smallInteger('zoneId')->unsigned()->default(0)->comment('Zone Identifier');
			$table->float('posX', 10, 0)->default(0);
			$table->float('posY', 10, 0)->default(0);
			$table->float('posZ', 10, 0)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_homebind');
	}

}

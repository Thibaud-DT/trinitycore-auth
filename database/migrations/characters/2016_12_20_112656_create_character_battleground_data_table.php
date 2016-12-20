<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterBattlegroundDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_battleground_data', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary()->comment('Global Unique Identifier');
			$table->integer('instanceId')->unsigned()->comment('Instance Identifier');
			$table->smallInteger('team')->unsigned();
			$table->float('joinX', 10, 0)->default(0);
			$table->float('joinY', 10, 0)->default(0);
			$table->float('joinZ', 10, 0)->default(0);
			$table->float('joinO', 10, 0)->default(0);
			$table->smallInteger('joinMapId')->unsigned()->default(0)->comment('Map Identifier');
			$table->integer('taxiStart')->unsigned()->default(0);
			$table->integer('taxiEnd')->unsigned()->default(0);
			$table->integer('mountSpell')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_battleground_data');
	}

}

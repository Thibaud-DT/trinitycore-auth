<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmQuestPhasingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('cm_quest_phasing', function(Blueprint $table)
		{
			$table->integer('questID')->unsigned()->default(0);
			$table->boolean('state')->default(0);
			$table->integer('areaID')->unsigned()->default(0);
			$table->integer('zoneID')->unsigned()->default(0);
			$table->integer('phase')->unsigned()->default(0);
			$table->primary(['questID','areaID','zoneID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('cm_quest_phasing');
	}

}

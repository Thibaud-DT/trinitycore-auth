<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureEquipTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_equip_template', function(Blueprint $table)
		{
			$table->integer('CreatureID')->unsigned()->default(0);
			$table->boolean('ID')->default(1);
			$table->integer('ItemID1')->unsigned()->default(0);
			$table->integer('ItemID2')->unsigned()->default(0);
			$table->integer('ItemID3')->unsigned()->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
			$table->primary(['CreatureID','ID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_equip_template');
	}

}

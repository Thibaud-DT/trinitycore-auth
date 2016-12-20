<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellTargetPositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_target_position', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->comment('Identifier');
			$table->boolean('EffectIndex')->default(0);
			$table->smallInteger('MapID')->unsigned()->default(0);
			$table->float('PositionX', 10, 0)->default(0);
			$table->float('PositionY', 10, 0)->default(0);
			$table->float('PositionZ', 10, 0)->default(0);
			$table->float('Orientation', 10, 0)->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
			$table->primary(['ID','EffectIndex']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_target_position');
	}

}

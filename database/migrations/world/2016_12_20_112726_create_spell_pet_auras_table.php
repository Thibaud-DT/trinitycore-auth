<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellPetAurasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_pet_auras', function(Blueprint $table)
		{
			$table->integer('spell')->unsigned()->comment('dummy spell id');
			$table->boolean('effectId')->default(0);
			$table->integer('pet')->unsigned()->default(0)->comment('pet id; 0 = all');
			$table->integer('aura')->unsigned()->comment('pet aura id');
			$table->primary(['spell','effectId','pet']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_pet_auras');
	}

}

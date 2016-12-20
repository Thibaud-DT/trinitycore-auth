<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSpellCooldownTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_spell_cooldown', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Global Unique Identifier, Low part');
			$table->integer('spell')->unsigned()->default(0)->comment('Spell Identifier');
			$table->integer('item')->unsigned()->default(0)->comment('Item Identifier');
			$table->integer('time')->unsigned()->default(0);
			$table->integer('categoryId')->unsigned()->default(0)->comment('Spell category Id');
			$table->integer('categoryEnd')->unsigned()->default(0);
			$table->primary(['guid','spell']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_spell_cooldown');
	}

}

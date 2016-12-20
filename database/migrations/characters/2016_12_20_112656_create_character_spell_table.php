<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSpellTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_spell', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Global Unique Identifier');
			$table->integer('spell')->unsigned()->default(0)->comment('Spell Identifier');
			$table->boolean('active')->default(1);
			$table->boolean('disabled')->default(0);
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
		Schema::connection('characters')->drop('character_spell');
	}

}

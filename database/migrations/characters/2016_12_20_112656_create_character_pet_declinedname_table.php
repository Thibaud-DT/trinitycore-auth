<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterPetDeclinednameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_pet_declinedname', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary();
			$table->integer('owner')->unsigned()->default(0)->index('owner_key');
			$table->string('genitive', 12)->default('');
			$table->string('dative', 12)->default('');
			$table->string('accusative', 12)->default('');
			$table->string('instrumental', 12)->default('');
			$table->string('prepositional', 12)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_pet_declinedname');
	}

}

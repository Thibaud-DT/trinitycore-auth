<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterDeclinednameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_declinedname', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary()->comment('Global Unique Identifier');
			$table->string('genitive', 15)->default('');
			$table->string('dative', 15)->default('');
			$table->string('accusative', 15)->default('');
			$table->string('instrumental', 15)->default('');
			$table->string('prepositional', 15)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_declinedname');
	}

}

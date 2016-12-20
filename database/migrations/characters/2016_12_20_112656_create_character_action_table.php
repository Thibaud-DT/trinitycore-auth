<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterActionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_action', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0);
			$table->boolean('spec')->default(0);
			$table->boolean('button')->default(0);
			$table->integer('action')->unsigned()->default(0);
			$table->boolean('type')->default(0);
			$table->primary(['guid','spec','button']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_action');
	}

}

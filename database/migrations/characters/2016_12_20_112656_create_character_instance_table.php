<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterInstanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_instance', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0);
			$table->integer('instance')->unsigned()->default(0)->index('instance');
			$table->boolean('permanent')->default(0);
			$table->boolean('extendState')->default(1);
			$table->primary(['guid','instance']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_instance');
	}

}

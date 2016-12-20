<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterAccountDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_account_data', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0);
			$table->boolean('type')->default(0);
			$table->integer('time')->unsigned()->default(0);
			$table->binary('data', 65535);
			$table->primary(['guid','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_account_data');
	}

}

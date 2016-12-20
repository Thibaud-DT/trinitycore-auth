<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('instance', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary();
			$table->smallInteger('map')->unsigned()->default(0)->index('map');
			$table->integer('resettime')->unsigned()->default(0)->index('resettime');
			$table->boolean('difficulty')->default(0)->index('difficulty');
			$table->integer('completedEncounters')->unsigned()->default(0);
			$table->text('data');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('instance');
	}

}

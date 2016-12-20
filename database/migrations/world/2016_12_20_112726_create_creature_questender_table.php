<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureQuestenderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_questender', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->comment('Identifier');
			$table->integer('quest')->unsigned()->default(0)->comment('Quest Identifier');
			$table->primary(['id','quest']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_questender');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameobjectQuestenderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gameobject_questender', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0);
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
		Schema::connection('world')->drop('gameobject_questender');
	}

}

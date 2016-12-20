<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterQueststatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_queststatus', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Global Unique Identifier');
			$table->integer('quest')->unsigned()->default(0)->comment('Quest Identifier');
			$table->boolean('status')->default(0);
			$table->boolean('explored')->default(0);
			$table->integer('timer')->unsigned()->default(0);
			$table->smallInteger('mobcount1')->unsigned()->default(0);
			$table->smallInteger('mobcount2')->unsigned()->default(0);
			$table->smallInteger('mobcount3')->unsigned()->default(0);
			$table->smallInteger('mobcount4')->unsigned()->default(0);
			$table->smallInteger('itemcount1')->unsigned()->default(0);
			$table->smallInteger('itemcount2')->unsigned()->default(0);
			$table->smallInteger('itemcount3')->unsigned()->default(0);
			$table->smallInteger('itemcount4')->unsigned()->default(0);
			$table->smallInteger('playercount')->unsigned()->default(0);
			$table->primary(['guid','quest']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_queststatus');
	}

}

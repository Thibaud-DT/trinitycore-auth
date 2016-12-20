<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterAchievementProgressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_achievement_progress', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned();
			$table->smallInteger('criteria')->unsigned();
			$table->integer('counter')->unsigned();
			$table->integer('date')->unsigned()->default(0);
			$table->primary(['guid','criteria']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_achievement_progress');
	}

}

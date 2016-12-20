<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterAchievementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_achievement', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned();
			$table->smallInteger('achievement')->unsigned();
			$table->integer('date')->unsigned()->default(0);
			$table->primary(['guid','achievement']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_achievement');
	}

}

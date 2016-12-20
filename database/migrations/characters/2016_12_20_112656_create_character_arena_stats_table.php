<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterArenaStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_arena_stats', function(Blueprint $table)
		{
			$table->integer('guid');
			$table->boolean('slot');
			$table->smallInteger('matchMakerRating');
			$table->primary(['guid','slot']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_arena_stats');
	}

}

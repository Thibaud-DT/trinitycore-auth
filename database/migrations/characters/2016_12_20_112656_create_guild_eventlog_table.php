<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildEventlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_eventlog', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->comment('Guild Identificator');
			$table->integer('LogGuid')->unsigned()->index('Idx_LogGuid')->comment('Log record identificator - auxiliary column');
			$table->boolean('EventType')->comment('Event type');
			$table->integer('PlayerGuid1')->unsigned()->index('Idx_PlayerGuid1')->comment('Player 1');
			$table->integer('PlayerGuid2')->unsigned()->index('Idx_PlayerGuid2')->comment('Player 2');
			$table->boolean('NewRank')->comment('New rank(in case promotion/demotion)');
			$table->integer('TimeStamp')->unsigned()->comment('Event UNIX time');
			$table->primary(['guildid','LogGuid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_eventlog');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildBankEventlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_bank_eventlog', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->default(0)->index('guildid_key')->comment('Guild Identificator');
			$table->integer('LogGuid')->unsigned()->default(0)->index('Idx_LogGuid')->comment('Log record identificator - auxiliary column');
			$table->boolean('TabId')->default(0)->comment('Guild bank TabId');
			$table->boolean('EventType')->default(0)->comment('Event type');
			$table->integer('PlayerGuid')->unsigned()->default(0)->index('Idx_PlayerGuid');
			$table->integer('ItemOrMoney')->unsigned()->default(0);
			$table->smallInteger('ItemStackCount')->unsigned()->default(0);
			$table->boolean('DestTabId')->default(0)->comment('Destination Tab Id');
			$table->integer('TimeStamp')->unsigned()->default(0)->comment('Event UNIX time');
			$table->primary(['guildid','LogGuid','TabId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_bank_eventlog');
	}

}

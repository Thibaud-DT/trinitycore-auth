<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildRankTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_rank', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->default(0);
			$table->boolean('rid')->index('Idx_rid');
			$table->string('rname', 20)->default('');
			$table->integer('rights')->unsigned()->default(0);
			$table->integer('BankMoneyPerDay')->unsigned()->default(0);
			$table->primary(['guildid','rid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_rank');
	}

}

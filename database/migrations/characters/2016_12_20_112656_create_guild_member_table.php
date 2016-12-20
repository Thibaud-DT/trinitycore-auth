<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_member', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->index('guildid_key')->comment('Guild Identificator');
			$table->integer('guid')->unsigned()->unique('guid_key');
			$table->boolean('rank');
			$table->string('pnote', 31)->default('');
			$table->string('offnote', 31)->default('');
			$table->index(['guildid','rank'], 'guildid_rank_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_member');
	}

}

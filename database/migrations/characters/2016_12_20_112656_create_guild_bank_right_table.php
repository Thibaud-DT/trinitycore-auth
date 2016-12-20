<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildBankRightTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_bank_right', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->default(0)->index('guildid_key');
			$table->boolean('TabId')->default(0);
			$table->boolean('rid')->default(0);
			$table->boolean('gbright')->default(0);
			$table->integer('SlotPerDay')->unsigned()->default(0);
			$table->primary(['guildid','TabId','rid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_bank_right');
	}

}

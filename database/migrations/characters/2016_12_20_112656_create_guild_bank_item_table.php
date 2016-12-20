<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildBankItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_bank_item', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->default(0)->index('guildid_key');
			$table->boolean('TabId')->default(0);
			$table->boolean('SlotId')->default(0);
			$table->integer('item_guid')->unsigned()->default(0)->index('Idx_item_guid');
			$table->primary(['guildid','TabId','SlotId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_bank_item');
	}

}

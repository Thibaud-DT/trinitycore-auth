<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildBankTabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_bank_tab', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->default(0)->index('guildid_key');
			$table->boolean('TabId')->default(0);
			$table->string('TabName', 16)->default('');
			$table->string('TabIcon', 100)->default('');
			$table->string('TabText', 500)->nullable();
			$table->primary(['guildid','TabId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_bank_tab');
	}

}

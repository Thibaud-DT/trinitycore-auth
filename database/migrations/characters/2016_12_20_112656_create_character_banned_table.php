<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterBannedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_banned', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Global Unique Identifier');
			$table->integer('bandate')->unsigned()->default(0);
			$table->integer('unbandate')->unsigned()->default(0);
			$table->string('bannedby', 50);
			$table->string('banreason');
			$table->boolean('active')->default(1);
			$table->primary(['guid','bandate']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_banned');
	}

}

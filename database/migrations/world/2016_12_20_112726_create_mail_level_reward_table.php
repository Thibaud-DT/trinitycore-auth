<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailLevelRewardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('mail_level_reward', function(Blueprint $table)
		{
			$table->boolean('level')->default(0);
			$table->integer('raceMask')->unsigned()->default(0);
			$table->integer('mailTemplateId')->unsigned()->default(0);
			$table->integer('senderEntry')->unsigned()->default(0);
			$table->primary(['level','raceMask']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('mail_level_reward');
	}

}

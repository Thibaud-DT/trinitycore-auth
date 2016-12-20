<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpBannedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('ip_banned', function(Blueprint $table)
		{
			$table->string('ip', 15)->default('127.0.0.1');
			$table->integer('bandate')->unsigned();
			$table->integer('unbandate')->unsigned();
			$table->string('bannedby', 50)->default('[Console]');
			$table->string('banreason')->default('no reason');
			$table->primary(['ip','bandate']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('ip_banned');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountBannedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('account_banned', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->comment('Account id');
			$table->integer('bandate')->unsigned()->default(0);
			$table->integer('unbandate')->unsigned()->default(0);
			$table->string('bannedby', 50);
			$table->string('banreason');
			$table->boolean('active')->default(1);
			$table->primary(['id','bandate']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('account_banned');
	}

}

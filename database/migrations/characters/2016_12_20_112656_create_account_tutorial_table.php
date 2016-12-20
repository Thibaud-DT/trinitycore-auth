<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountTutorialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('account_tutorial', function(Blueprint $table)
		{
			$table->integer('accountId')->unsigned()->default(0)->primary()->comment('Account Identifier');
			$table->integer('tut0')->unsigned()->default(0);
			$table->integer('tut1')->unsigned()->default(0);
			$table->integer('tut2')->unsigned()->default(0);
			$table->integer('tut3')->unsigned()->default(0);
			$table->integer('tut4')->unsigned()->default(0);
			$table->integer('tut5')->unsigned()->default(0);
			$table->integer('tut6')->unsigned()->default(0);
			$table->integer('tut7')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('account_tutorial');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('account_data', function(Blueprint $table)
		{
			$table->integer('accountId')->unsigned()->default(0)->comment('Account Identifier');
			$table->boolean('type')->default(0);
			$table->integer('time')->unsigned()->default(0);
			$table->binary('data', 65535);
			$table->primary(['accountId','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('account_data');
	}

}

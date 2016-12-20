<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountInstanceTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('account_instance_times', function(Blueprint $table)
		{
			$table->integer('accountId')->unsigned();
			$table->integer('instanceId')->unsigned()->default(0);
			$table->bigInteger('releaseTime')->unsigned()->default(0);
			$table->primary(['accountId','instanceId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('account_instance_times');
	}

}

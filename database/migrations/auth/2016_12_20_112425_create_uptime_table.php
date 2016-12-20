<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUptimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('uptime', function(Blueprint $table)
		{
			$table->integer('realmid')->unsigned();
			$table->integer('starttime')->unsigned()->default(0);
			$table->integer('uptime')->unsigned()->default(0);
			$table->smallInteger('maxplayers')->unsigned()->default(0);
			$table->string('revision')->default('Trinitycore');
			$table->primary(['realmid','starttime']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('uptime');
	}

}

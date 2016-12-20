<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsIpActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('logs_ip_actions', function(Blueprint $table)
		{
			$table->increments('id')->comment('Unique Identifier');
			$table->integer('account_id')->unsigned()->comment('Account ID');
			$table->integer('character_guid')->unsigned()->comment('Character Guid');
			$table->boolean('type');
			$table->string('ip', 15)->default('127.0.0.1');
			$table->text('systemnote', 65535)->nullable()->comment('Notes inserted by system');
			$table->integer('unixtime')->unsigned()->comment('Unixtime');
			$table->timestamp('time')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Timestamp');
			$table->text('comment', 65535)->nullable()->comment('Allows users to add a comment');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('logs_ip_actions');
	}

}

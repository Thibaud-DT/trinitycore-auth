<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarInvitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('calendar_invites', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->default(0)->primary();
			$table->bigInteger('event')->unsigned()->default(0);
			$table->integer('invitee')->unsigned()->default(0);
			$table->integer('sender')->unsigned()->default(0);
			$table->boolean('status')->default(0);
			$table->integer('statustime')->unsigned()->default(0);
			$table->boolean('rank')->default(0);
			$table->string('text')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('calendar_invites');
	}

}

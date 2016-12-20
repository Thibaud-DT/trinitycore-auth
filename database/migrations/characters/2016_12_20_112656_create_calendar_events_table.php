<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('calendar_events', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->default(0)->primary();
			$table->integer('creator')->unsigned()->default(0);
			$table->string('title')->default('');
			$table->string('description')->default('');
			$table->boolean('type')->default(4);
			$table->integer('dungeon')->default(-1);
			$table->integer('eventtime')->unsigned()->default(0);
			$table->integer('flags')->unsigned()->default(0);
			$table->integer('time2')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('calendar_events');
	}

}

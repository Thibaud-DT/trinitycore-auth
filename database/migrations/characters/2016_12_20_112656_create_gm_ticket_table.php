<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGmTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('gm_ticket', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('type')->default(0)->comment('0 open, 1 closed, 2 character deleted');
			$table->integer('playerGuid')->unsigned()->default(0)->comment('Global Unique Identifier of ticket creator');
			$table->string('name', 12)->comment('Name of ticket creator');
			$table->text('description', 65535);
			$table->integer('createTime')->unsigned()->default(0);
			$table->smallInteger('mapId')->unsigned()->default(0);
			$table->float('posX', 10, 0)->default(0);
			$table->float('posY', 10, 0)->default(0);
			$table->float('posZ', 10, 0)->default(0);
			$table->integer('lastModifiedTime')->unsigned()->default(0);
			$table->integer('closedBy')->unsigned()->default(0);
			$table->integer('assignedTo')->unsigned()->default(0)->comment('GUID of admin to whom ticket is assigned');
			$table->text('comment', 65535);
			$table->text('response', 65535);
			$table->boolean('completed')->default(0);
			$table->boolean('escalated')->default(0);
			$table->boolean('viewed')->default(0);
			$table->boolean('needMoreHelp')->default(0);
			$table->integer('resolvedBy')->unsigned()->default(0)->comment('GUID of GM who resolved the ticket');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('gm_ticket');
	}

}

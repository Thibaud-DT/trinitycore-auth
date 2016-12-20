<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestRequestItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_request_items', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->smallInteger('EmoteOnComplete')->unsigned()->default(0);
			$table->smallInteger('EmoteOnIncomplete')->unsigned()->default(0);
			$table->text('CompletionText', 65535)->nullable();
			$table->smallInteger('VerifiedBuild')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('quest_request_items');
	}

}

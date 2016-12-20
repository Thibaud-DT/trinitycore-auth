<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('mail_items', function(Blueprint $table)
		{
			$table->integer('mail_id')->unsigned()->default(0)->index('idx_mail_id');
			$table->integer('item_guid')->unsigned()->default(0)->primary();
			$table->integer('receiver')->unsigned()->default(0)->index('idx_receiver')->comment('Character Global Unique Identifier');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('mail_items');
	}

}

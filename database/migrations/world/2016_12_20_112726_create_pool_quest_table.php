<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoolQuestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pool_quest', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->index('idx_guid');
			$table->integer('pool_entry')->unsigned()->default(0);
			$table->string('description')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('pool_quest');
	}

}

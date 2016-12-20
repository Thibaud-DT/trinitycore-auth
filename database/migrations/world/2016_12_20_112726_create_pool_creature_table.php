<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoolCreatureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pool_creature', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->index('idx_guid');
			$table->integer('pool_entry')->unsigned()->default(0);
			$table->float('chance', 10, 0)->unsigned()->default(0);
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
		Schema::connection('world')->drop('pool_creature');
	}

}

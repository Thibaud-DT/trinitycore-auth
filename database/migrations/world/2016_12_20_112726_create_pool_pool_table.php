<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoolPoolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pool_pool', function(Blueprint $table)
		{
			$table->integer('pool_id')->unsigned()->default(0)->primary();
			$table->integer('mother_pool')->unsigned()->default(0);
			$table->float('chance', 10, 0)->default(0);
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
		Schema::connection('world')->drop('pool_pool');
	}

}

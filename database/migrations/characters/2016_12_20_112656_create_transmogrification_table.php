<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransmogrificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('transmogrification', function(Blueprint $table)
		{
			$table->integer('item')->unsigned()->primary();
			$table->integer('old_entry')->unsigned();
			$table->integer('new_entry')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('transmogrification');
	}

}

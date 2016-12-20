<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('transports', function(Blueprint $table)
		{
			$table->increments('guid');
			$table->integer('entry')->unsigned()->default(0)->unique('idx_entry');
			$table->text('name', 65535)->nullable();
			$table->char('ScriptName', 64)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('transports');
	}

}

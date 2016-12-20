<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('disables', function(Blueprint $table)
		{
			$table->integer('sourceType')->unsigned();
			$table->integer('entry')->unsigned();
			$table->boolean('flags')->default(0);
			$table->string('params_0')->default('');
			$table->string('params_1')->default('');
			$table->string('comment')->default('');
			$table->primary(['sourceType','entry']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('disables');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstanceResetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('instance_reset', function(Blueprint $table)
		{
			$table->smallInteger('mapid')->unsigned()->default(0);
			$table->boolean('difficulty')->default(0)->index('difficulty');
			$table->integer('resettime')->unsigned()->default(0);
			$table->primary(['mapid','difficulty']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('instance_reset');
	}

}

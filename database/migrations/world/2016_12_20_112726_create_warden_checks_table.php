<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWardenChecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('warden_checks', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->boolean('type')->nullable();
			$table->string('data', 48)->nullable();
			$table->string('str', 20)->nullable();
			$table->integer('address')->unsigned()->nullable();
			$table->boolean('length')->nullable();
			$table->string('result', 24)->nullable();
			$table->string('comment', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('warden_checks');
	}

}

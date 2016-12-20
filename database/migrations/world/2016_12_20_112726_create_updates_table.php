<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('updates', function(Blueprint $table)
		{
			$table->string('name', 200)->primary()->comment('filename with extension of the update.');
			$table->char('hash', 40)->nullable()->default('')->comment('sha1 hash of the sql file.');
			$table->string('state')->default('RELEASED')->comment('defines if an update is released or archived.');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('timestamp when the query was applied.');
			$table->integer('speed')->unsigned()->default(0)->comment('time the query takes to apply in ms.');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('updates');
	}

}

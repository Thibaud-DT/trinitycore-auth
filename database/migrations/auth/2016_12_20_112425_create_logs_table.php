<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('logs', function(Blueprint $table)
		{
			$table->integer('time')->unsigned();
			$table->integer('realm')->unsigned();
			$table->string('type', 250);
			$table->boolean('level')->default(0);
			$table->text('string', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('logs');
	}

}

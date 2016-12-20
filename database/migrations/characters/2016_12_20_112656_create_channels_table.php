<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChannelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('channels', function(Blueprint $table)
		{
			$table->string('name', 128);
			$table->integer('team')->unsigned();
			$table->boolean('announce')->default(1);
			$table->boolean('ownership')->default(1);
			$table->string('password', 32)->nullable();
			$table->text('bannedList', 65535)->nullable();
			$table->integer('lastUsed')->unsigned();
			$table->primary(['name','team']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('channels');
	}

}

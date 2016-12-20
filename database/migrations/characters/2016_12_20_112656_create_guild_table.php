<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild', function(Blueprint $table)
		{
			$table->integer('guildid')->unsigned()->default(0)->primary();
			$table->string('name', 24)->default('');
			$table->integer('leaderguid')->unsigned()->default(0);
			$table->boolean('EmblemStyle')->default(0);
			$table->boolean('EmblemColor')->default(0);
			$table->boolean('BorderStyle')->default(0);
			$table->boolean('BorderColor')->default(0);
			$table->boolean('BackgroundColor')->default(0);
			$table->string('info', 500)->default('');
			$table->string('motd', 128)->default('');
			$table->integer('createdate')->unsigned()->default(0);
			$table->bigInteger('BankMoney')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild');
	}

}

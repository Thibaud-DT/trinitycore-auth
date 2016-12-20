<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChangelogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('changelog', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->text('description', 65535);
			$table->integer('created');
			$table->string('author', 45)->nullable()->default('Administrateur');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('changelog');
	}

}

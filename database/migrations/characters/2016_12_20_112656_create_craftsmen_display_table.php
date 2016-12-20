<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCraftsmenDisplayTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('craftsmen_display', function(Blueprint $table)
		{
			$table->bigInteger('guid')->unsigned();
			$table->integer('profession');
			$table->primary(['guid','profession']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('craftsmen_display');
	}

}

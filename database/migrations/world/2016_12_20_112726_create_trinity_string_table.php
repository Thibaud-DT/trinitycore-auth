<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrinityStringTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('trinity_string', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->text('content_default', 65535);
			$table->text('content_loc1', 65535)->nullable();
			$table->text('content_loc2', 65535)->nullable();
			$table->text('content_loc3', 65535)->nullable();
			$table->text('content_loc4', 65535)->nullable();
			$table->text('content_loc5', 65535)->nullable();
			$table->text('content_loc6', 65535)->nullable();
			$table->text('content_loc7', 65535)->nullable();
			$table->text('content_loc8', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('trinity_string');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesItemSetNamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_item_set_names', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->string('name_loc1', 100)->default('');
			$table->string('name_loc2', 100)->default('');
			$table->string('name_loc3', 100)->default('');
			$table->string('name_loc4', 100)->default('');
			$table->string('name_loc5', 100)->default('');
			$table->string('name_loc6', 100)->default('');
			$table->string('name_loc7', 100)->default('');
			$table->string('name_loc8', 100)->default('');
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('locales_item_set_names');
	}

}

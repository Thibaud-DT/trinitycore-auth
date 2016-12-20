<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesCreatureTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_creature_text', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->boolean('groupid')->default(0);
			$table->boolean('id')->default(0);
			$table->text('text_loc1', 65535)->nullable();
			$table->text('text_loc2', 65535)->nullable();
			$table->text('text_loc3', 65535)->nullable();
			$table->text('text_loc4', 65535)->nullable();
			$table->text('text_loc5', 65535)->nullable();
			$table->text('text_loc6', 65535)->nullable();
			$table->text('text_loc7', 65535)->nullable();
			$table->text('text_loc8', 65535)->nullable();
			$table->primary(['entry','groupid','id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('locales_creature_text');
	}

}

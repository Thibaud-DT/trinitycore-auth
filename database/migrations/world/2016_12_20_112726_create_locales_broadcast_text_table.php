<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesBroadcastTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_broadcast_text', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->text('MaleText_loc1')->nullable();
			$table->text('MaleText_loc2')->nullable();
			$table->text('MaleText_loc3')->nullable();
			$table->text('MaleText_loc4')->nullable();
			$table->text('MaleText_loc5')->nullable();
			$table->text('MaleText_loc6')->nullable();
			$table->text('MaleText_loc7')->nullable();
			$table->text('MaleText_loc8')->nullable();
			$table->text('FemaleText_loc1')->nullable();
			$table->text('FemaleText_loc2')->nullable();
			$table->text('FemaleText_loc3')->nullable();
			$table->text('FemaleText_loc4')->nullable();
			$table->text('FemaleText_loc5')->nullable();
			$table->text('FemaleText_loc6')->nullable();
			$table->text('FemaleText_loc7')->nullable();
			$table->text('FemaleText_loc8')->nullable();
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
		Schema::connection('world')->drop('locales_broadcast_text');
	}

}

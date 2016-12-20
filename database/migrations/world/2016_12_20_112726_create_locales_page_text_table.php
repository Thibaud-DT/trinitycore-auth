<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesPageTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_page_text', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->text('Text_loc1')->nullable();
			$table->text('Text_loc2')->nullable();
			$table->text('Text_loc3')->nullable();
			$table->text('Text_loc4')->nullable();
			$table->text('Text_loc5')->nullable();
			$table->text('Text_loc6')->nullable();
			$table->text('Text_loc7')->nullable();
			$table->text('Text_loc8')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('locales_page_text');
	}

}

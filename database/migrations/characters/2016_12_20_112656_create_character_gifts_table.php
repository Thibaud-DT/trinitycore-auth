<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterGiftsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_gifts', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->index('idx_guid');
			$table->integer('item_guid')->unsigned()->default(0)->primary();
			$table->integer('entry')->unsigned()->default(0);
			$table->integer('flags')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_gifts');
	}

}

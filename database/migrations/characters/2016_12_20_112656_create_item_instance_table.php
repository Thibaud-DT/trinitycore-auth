<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemInstanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('item_instance', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary();
			$table->integer('itemEntry')->unsigned()->default(0);
			$table->integer('owner_guid')->unsigned()->default(0)->index('idx_owner_guid');
			$table->integer('creatorGuid')->unsigned()->default(0);
			$table->integer('giftCreatorGuid')->unsigned()->default(0);
			$table->integer('count')->unsigned()->default(1);
			$table->integer('duration')->default(0);
			$table->text('charges')->nullable();
			$table->integer('flags')->unsigned()->default(0);
			$table->text('enchantments', 65535);
			$table->smallInteger('randomPropertyId')->default(0);
			$table->smallInteger('durability')->unsigned()->default(0);
			$table->integer('playedTime')->unsigned()->default(0);
			$table->text('text', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('item_instance');
	}

}

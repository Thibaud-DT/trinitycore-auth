<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuctionhouseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('auctionhouse', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary();
			$table->boolean('houseid')->default(7);
			$table->integer('itemguid')->unsigned()->default(0)->unique('item_guid');
			$table->integer('itemowner')->unsigned()->default(0);
			$table->integer('buyoutprice')->unsigned()->default(0);
			$table->integer('time')->unsigned()->default(0);
			$table->integer('buyguid')->unsigned()->default(0);
			$table->integer('lastbid')->unsigned()->default(0);
			$table->integer('startbid')->unsigned()->default(0);
			$table->integer('deposit')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('auctionhouse');
	}

}

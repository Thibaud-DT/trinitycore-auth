<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemRefundInstanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('item_refund_instance', function(Blueprint $table)
		{
			$table->integer('item_guid')->unsigned()->comment('Item GUID');
			$table->integer('player_guid')->unsigned()->comment('Player GUID');
			$table->integer('paidMoney')->unsigned()->default(0);
			$table->smallInteger('paidExtendedCost')->unsigned()->default(0);
			$table->primary(['item_guid','player_guid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('item_refund_instance');
	}

}

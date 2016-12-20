<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemSoulboundTradeDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('item_soulbound_trade_data', function(Blueprint $table)
		{
			$table->integer('itemGuid')->unsigned()->primary()->comment('Item GUID');
			$table->text('allowedPlayers', 65535)->comment('Space separated GUID list of players who can receive this item in trade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('item_soulbound_trade_data');
	}

}

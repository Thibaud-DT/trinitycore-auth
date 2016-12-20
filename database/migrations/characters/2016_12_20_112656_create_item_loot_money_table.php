<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemLootMoneyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('item_loot_money', function(Blueprint $table)
		{
			$table->integer('container_id')->default(0)->comment('guid of container (item_instance.guid)');
			$table->integer('money')->default(0)->comment('money loot (in copper)');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('item_loot_money');
	}

}

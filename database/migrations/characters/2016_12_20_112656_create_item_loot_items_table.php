<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemLootItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('item_loot_items', function(Blueprint $table)
		{
			$table->integer('container_id')->unsigned()->default(0)->comment('guid of container (item_instance.guid)');
			$table->integer('item_id')->unsigned()->default(0)->comment('loot item entry (item_instance.itemEntry)');
			$table->integer('item_count')->default(0)->comment('stack size');
			$table->boolean('follow_rules')->default(0)->comment('follow loot rules');
			$table->boolean('ffa')->default(0)->comment('free-for-all');
			$table->boolean('blocked')->default(0);
			$table->boolean('counted')->default(0);
			$table->boolean('under_threshold')->default(0);
			$table->boolean('needs_quest')->default(0)->comment('quest drop');
			$table->integer('rnd_prop')->default(0)->comment('random enchantment added when originally rolled');
			$table->integer('rnd_suffix')->default(0)->comment('random suffix added when originally rolled');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('item_loot_items');
	}

}

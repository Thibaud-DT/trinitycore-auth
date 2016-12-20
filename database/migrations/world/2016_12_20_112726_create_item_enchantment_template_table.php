<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemEnchantmentTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('item_enchantment_template', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->integer('ench')->unsigned()->default(0);
			$table->float('chance', 10, 0)->unsigned()->default(0);
			$table->primary(['entry','ench']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('item_enchantment_template');
	}

}

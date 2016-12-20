<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_inventory', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->index('idx_guid')->comment('Global Unique Identifier');
			$table->integer('bag')->unsigned()->default(0);
			$table->boolean('slot')->default(0);
			$table->integer('item')->unsigned()->default(0)->primary()->comment('Item Global Unique Identifier');
			$table->unique(['guid','bag','slot'], 'guid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_inventory');
	}

}

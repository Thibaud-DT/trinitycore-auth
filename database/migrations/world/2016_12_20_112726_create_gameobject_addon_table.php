<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameobjectAddonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gameobject_addon', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary();
			$table->boolean('invisibilityType')->default(0);
			$table->integer('invisibilityValue')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('gameobject_addon');
	}

}

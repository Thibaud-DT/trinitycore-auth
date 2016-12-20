<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayercreateinfoItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('playercreateinfo_item', function(Blueprint $table)
		{
			$table->boolean('race')->default(0);
			$table->boolean('class')->default(0);
			$table->integer('itemid')->unsigned()->default(0);
			$table->boolean('amount')->default(1);
			$table->primary(['race','class','itemid']);
			$table->index(['race','class'], 'playercreateinfo_race_class_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('playercreateinfo_item');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkedRespawnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('linked_respawn', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->comment('dependent creature');
			$table->integer('linkedGuid')->unsigned()->comment('master creature');
			$table->boolean('linkType')->default(0);
			$table->primary(['guid','linkType']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('linked_respawn');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBattlemasterEntryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('battlemaster_entry', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary()->comment('Entry of a creature');
			$table->integer('bg_template')->unsigned()->default(0)->comment('Battleground template id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('battlemaster_entry');
	}

}

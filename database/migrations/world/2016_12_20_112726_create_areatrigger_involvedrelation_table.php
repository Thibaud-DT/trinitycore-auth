<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAreatriggerInvolvedrelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('areatrigger_involvedrelation', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary()->comment('Identifier');
			$table->integer('quest')->unsigned()->default(0)->comment('Quest Identifier');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('areatrigger_involvedrelation');
	}

}

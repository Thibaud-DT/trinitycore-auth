<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBattlegroundDesertersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('battleground_deserters', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->comment('characters.guid');
			$table->boolean('type')->comment('type of the desertion');
			$table->dateTime('datetime')->comment('datetime of the desertion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('battleground_deserters');
	}

}

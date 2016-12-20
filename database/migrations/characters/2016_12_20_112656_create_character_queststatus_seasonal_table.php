<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterQueststatusSeasonalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_queststatus_seasonal', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->index('idx_guid')->comment('Global Unique Identifier');
			$table->integer('quest')->unsigned()->default(0)->comment('Quest Identifier');
			$table->integer('event')->unsigned()->default(0)->comment('Event Identifier');
			$table->primary(['guid','quest']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_queststatus_seasonal');
	}

}

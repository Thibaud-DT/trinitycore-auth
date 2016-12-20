<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetitionSignTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('petition_sign', function(Blueprint $table)
		{
			$table->integer('ownerguid')->unsigned()->index('Idx_ownerguid');
			$table->integer('petitionguid')->unsigned()->default(0);
			$table->integer('playerguid')->unsigned()->default(0)->index('Idx_playerguid');
			$table->integer('player_account')->unsigned()->default(0);
			$table->boolean('type')->default(0);
			$table->primary(['petitionguid','playerguid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('petition_sign');
	}

}

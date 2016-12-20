<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetitionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('petition', function(Blueprint $table)
		{
			$table->integer('ownerguid')->unsigned();
			$table->integer('petitionguid')->unsigned()->nullable()->default(0);
			$table->string('name', 24);
			$table->boolean('type')->default(0);
			$table->primary(['ownerguid','type']);
			$table->unique(['ownerguid','petitionguid'], 'index_ownerguid_petitionguid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('petition');
	}

}

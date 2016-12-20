<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRealmcharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('realmcharacters', function(Blueprint $table)
		{
			$table->integer('realmid')->unsigned()->default(0);
			$table->integer('acctid')->unsigned()->index('acctid');
			$table->boolean('numchars')->default(0);
			$table->primary(['realmid','acctid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('realmcharacters');
	}

}

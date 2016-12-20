<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountAccessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('account_access', function(Blueprint $table)
		{
			$table->integer('id')->unsigned();
			$table->boolean('gmlevel');
			$table->integer('RealmID')->default(-1);
			$table->primary(['id','RealmID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('account_access');
	}

}

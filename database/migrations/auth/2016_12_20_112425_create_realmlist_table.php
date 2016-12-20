<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRealmlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('realmlist', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 32)->default('')->unique('idx_name');
			$table->string('address')->default('127.0.0.1');
			$table->string('localAddress')->default('127.0.0.1');
			$table->string('localSubnetMask')->default('255.255.255.0');
			$table->smallInteger('port')->unsigned()->default(8085);
			$table->boolean('icon')->default(0);
			$table->boolean('flag')->default(2);
			$table->boolean('timezone')->default(0);
			$table->boolean('allowedSecurityLevel')->default(0);
			$table->float('population', 10, 0)->unsigned()->default(0);
			$table->integer('gamebuild')->unsigned()->default(12340);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('realmlist');
	}

}

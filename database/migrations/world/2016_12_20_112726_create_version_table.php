<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVersionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('version', function(Blueprint $table)
		{
			$table->string('core_version', 120)->default('')->primary()->comment('Core revision dumped at startup.');
			$table->string('core_revision', 120)->nullable();
			$table->string('db_version', 120)->nullable()->comment('Version of world DB.');
			$table->integer('cache_id')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('version');
	}

}

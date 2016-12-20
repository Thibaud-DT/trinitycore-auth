<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRbacPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('rbac_permissions', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary()->comment('Permission id');
			$table->string('name', 100)->comment('Permission name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('rbac_permissions');
	}

}

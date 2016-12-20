<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRbacAccountPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('rbac_account_permissions', function(Blueprint $table)
		{
			$table->integer('accountId')->unsigned()->comment('Account id');
			$table->integer('permissionId')->unsigned()->index('fk__rbac_account_roles__rbac_permissions')->comment('Permission id');
			$table->boolean('granted')->default(1)->comment('Granted = 1, Denied = 0');
			$table->integer('realmId')->default(-1)->comment('Realm Id, -1 means all');
			$table->primary(['accountId','permissionId','realmId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('rbac_account_permissions');
	}

}

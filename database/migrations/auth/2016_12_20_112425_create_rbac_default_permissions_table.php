<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRbacDefaultPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('rbac_default_permissions', function(Blueprint $table)
		{
			$table->integer('secId')->unsigned()->comment('Security Level id');
			$table->integer('permissionId')->unsigned()->index('fk__rbac_default_permissions__rbac_permissions')->comment('permission id');
			$table->integer('realmId')->default(-1)->comment('Realm Id, -1 means all');
			$table->primary(['secId','permissionId','realmId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('rbac_default_permissions');
	}

}

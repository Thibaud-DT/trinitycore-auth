<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRbacDefaultPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->table('rbac_default_permissions', function(Blueprint $table)
		{
			$table->foreign('permissionId', 'fk__rbac_default_permissions__rbac_permissions')->references('id')->on('rbac_permissions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->table('rbac_default_permissions', function(Blueprint $table)
		{
			$table->dropForeign('fk__rbac_default_permissions__rbac_permissions');
		});
	}

}

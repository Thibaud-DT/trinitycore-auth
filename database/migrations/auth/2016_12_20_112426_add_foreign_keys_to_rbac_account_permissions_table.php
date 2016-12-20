<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRbacAccountPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->table('rbac_account_permissions', function(Blueprint $table)
		{
			$table->foreign('accountId', 'fk__rbac_account_permissions__account')->references('id')->on('account')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('permissionId', 'fk__rbac_account_roles__rbac_permissions')->references('id')->on('rbac_permissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->table('rbac_account_permissions', function(Blueprint $table)
		{
			$table->dropForeign('fk__rbac_account_permissions__account');
			$table->dropForeign('fk__rbac_account_roles__rbac_permissions');
		});
	}

}

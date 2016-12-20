<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRbacLinkedPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->table('rbac_linked_permissions', function(Blueprint $table)
		{
			$table->foreign('id', 'fk__rbac_linked_permissions__rbac_permissions1')->references('id')->on('rbac_permissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('linkedId', 'fk__rbac_linked_permissions__rbac_permissions2')->references('id')->on('rbac_permissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->table('rbac_linked_permissions', function(Blueprint $table)
		{
			$table->dropForeign('fk__rbac_linked_permissions__rbac_permissions1');
			$table->dropForeign('fk__rbac_linked_permissions__rbac_permissions2');
		});
	}

}

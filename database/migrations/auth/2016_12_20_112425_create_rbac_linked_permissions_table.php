<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRbacLinkedPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('rbac_linked_permissions', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->index('fk__rbac_linked_permissions__rbac_permissions1')->comment('Permission id');
			$table->integer('linkedId')->unsigned()->index('fk__rbac_linked_permissions__rbac_permissions2')->comment('Linked Permission id');
			$table->primary(['id','linkedId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('rbac_linked_permissions');
	}

}

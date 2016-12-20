<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('group_member', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned();
			$table->integer('memberGuid')->unsigned()->primary();
			$table->boolean('memberFlags')->default(0);
			$table->boolean('subgroup')->default(0);
			$table->boolean('roles')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('group_member');
	}

}

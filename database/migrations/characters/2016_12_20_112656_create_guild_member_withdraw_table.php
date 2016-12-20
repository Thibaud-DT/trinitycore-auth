<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildMemberWithdrawTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('guild_member_withdraw', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->primary();
			$table->integer('tab0')->unsigned()->default(0);
			$table->integer('tab1')->unsigned()->default(0);
			$table->integer('tab2')->unsigned()->default(0);
			$table->integer('tab3')->unsigned()->default(0);
			$table->integer('tab4')->unsigned()->default(0);
			$table->integer('tab5')->unsigned()->default(0);
			$table->integer('money')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('guild_member_withdraw');
	}

}

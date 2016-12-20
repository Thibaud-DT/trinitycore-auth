<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountAlphaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('account_alpha', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('account');
			$table->string('email');
			$table->string('password');
			$table->string('token_key')->nullable();
			$table->integer('verif')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('account_alpha');
	}

}

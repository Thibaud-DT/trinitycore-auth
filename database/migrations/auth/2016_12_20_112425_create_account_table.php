<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('account', function(Blueprint $table)
		{
			$table->increments('id')->comment('Identifier');
			$table->string('username', 32)->default('')->unique('idx_username');
			$table->string('sha_pass_hash', 40)->default('');
			$table->string('sessionkey', 80)->default('');
			$table->string('v', 64)->default('');
			$table->string('s', 64)->default('');
			$table->string('token_key', 100)->default('');
			$table->string('email')->default('');
			$table->string('reg_mail')->default('');
			$table->timestamp('joindate')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('last_ip', 15)->default('127.0.0.1');
			$table->string('last_attempt_ip', 15)->default('127.0.0.1');
			$table->integer('failed_logins')->unsigned()->default(0);
			$table->boolean('locked')->default(0);
			$table->string('lock_country', 2)->default('00');
			$table->dateTime('last_login')->nullable();
			$table->boolean('online')->default(0);
			$table->boolean('expansion')->default(2);
			$table->bigInteger('mutetime')->default(0);
			$table->string('mutereason')->default('');
			$table->string('muteby', 50)->default('');
			$table->boolean('locale')->default(0);
			$table->string('os', 3)->default('');
			$table->integer('recruiter')->unsigned()->default(0);
			$table->integer('vp')->default(0);
			$table->integer('dp')->default(0);
			$table->string('remember_token', 100)->nullable();
			$table->boolean('email_validate')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('account');
	}

}

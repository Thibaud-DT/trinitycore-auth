<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutobroadcastTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('autobroadcast', function(Blueprint $table)
		{
			$table->integer('realmid')->default(-1);
			$table->boolean('id');
			$table->boolean('weight')->nullable()->default(1);
			$table->text('text');
			$table->primary(['id','realmid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('autobroadcast');
	}

}

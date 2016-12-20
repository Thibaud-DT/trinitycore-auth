<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoolTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pool_template', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary()->comment('Pool entry');
			$table->integer('max_limit')->unsigned()->default(0)->comment('Max number of objects (0) is no limit');
			$table->string('description')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('pool_template');
	}

}

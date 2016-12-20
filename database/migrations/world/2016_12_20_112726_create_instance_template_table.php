<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstanceTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('instance_template', function(Blueprint $table)
		{
			$table->smallInteger('map')->unsigned()->primary();
			$table->smallInteger('parent')->unsigned();
			$table->string('script', 128)->default('');
			$table->boolean('allowMount')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('instance_template');
	}

}

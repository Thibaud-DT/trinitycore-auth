<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureTemplateAddonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_template_addon', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->integer('path_id')->unsigned()->default(0);
			$table->integer('mount')->unsigned()->default(0);
			$table->integer('bytes1')->unsigned()->default(0);
			$table->integer('bytes2')->unsigned()->default(0);
			$table->integer('emote')->unsigned()->default(0);
			$table->text('auras', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_template_addon');
	}

}

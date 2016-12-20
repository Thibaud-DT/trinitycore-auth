<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameobjectTemplateLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gameobject_template_locale', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->string('locale', 4);
			$table->text('name', 65535)->nullable();
			$table->text('castBarCaption', 65535)->nullable();
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
			$table->primary(['entry','locale']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('gameobject_template_locale');
	}

}

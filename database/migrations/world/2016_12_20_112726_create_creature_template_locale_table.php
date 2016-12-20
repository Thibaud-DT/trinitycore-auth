<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureTemplateLocaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_template_locale', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->string('locale', 4);
			$table->text('Name', 65535)->nullable();
			$table->text('Title', 65535)->nullable();
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
		Schema::connection('world')->drop('creature_template_locale');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayercreateinfoSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('playercreateinfo_skills', function(Blueprint $table)
		{
			$table->integer('raceMask')->unsigned();
			$table->integer('classMask')->unsigned();
			$table->smallInteger('skill')->unsigned();
			$table->smallInteger('rank')->unsigned()->default(0);
			$table->string('comment')->nullable();
			$table->primary(['raceMask','classMask','skill']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('playercreateinfo_skills');
	}

}

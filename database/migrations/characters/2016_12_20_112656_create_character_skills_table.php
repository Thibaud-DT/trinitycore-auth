<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_skills', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->comment('Global Unique Identifier');
			$table->smallInteger('skill')->unsigned();
			$table->smallInteger('value')->unsigned();
			$table->smallInteger('max')->unsigned();
			$table->primary(['guid','skill']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_skills');
	}

}

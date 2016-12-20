<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetNameGenerationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('pet_name_generation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('word');
			$table->integer('entry')->unsigned()->default(0);
			$table->boolean('half')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('pet_name_generation');
	}

}

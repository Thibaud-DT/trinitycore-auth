<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellRanksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_ranks', function(Blueprint $table)
		{
			$table->integer('first_spell_id')->unsigned()->default(0);
			$table->integer('spell_id')->unsigned()->default(0)->unique('spell_id');
			$table->boolean('rank')->default(0);
			$table->primary(['first_spell_id','rank']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_ranks');
	}

}

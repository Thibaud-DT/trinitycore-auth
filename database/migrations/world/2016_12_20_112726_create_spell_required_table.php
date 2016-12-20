<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellRequiredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_required', function(Blueprint $table)
		{
			$table->integer('spell_id')->default(0);
			$table->integer('req_spell')->default(0);
			$table->primary(['spell_id','req_spell']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_required');
	}

}

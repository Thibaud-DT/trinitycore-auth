<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellLinkedSpellTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_linked_spell', function(Blueprint $table)
		{
			$table->integer('spell_trigger');
			$table->integer('spell_effect')->default(0);
			$table->boolean('type')->default(0);
			$table->text('comment', 65535);
			$table->unique(['spell_trigger','spell_effect','type'], 'trigger_effect_type');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_linked_spell');
	}

}

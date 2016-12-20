<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellCustomAttrTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_custom_attr', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary()->comment('spell id');
			$table->integer('attributes')->unsigned()->default(0)->comment('SpellCustomAttributes');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_custom_attr');
	}

}

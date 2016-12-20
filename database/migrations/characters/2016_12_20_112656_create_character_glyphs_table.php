<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterGlyphsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_glyphs', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned();
			$table->boolean('talentGroup')->default(0);
			$table->smallInteger('glyph1')->unsigned()->nullable()->default(0);
			$table->smallInteger('glyph2')->unsigned()->nullable()->default(0);
			$table->smallInteger('glyph3')->unsigned()->nullable()->default(0);
			$table->smallInteger('glyph4')->unsigned()->nullable()->default(0);
			$table->smallInteger('glyph5')->unsigned()->nullable()->default(0);
			$table->smallInteger('glyph6')->unsigned()->nullable()->default(0);
			$table->primary(['guid','talentGroup']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_glyphs');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterTalentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_talent', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned();
			$table->integer('spell')->unsigned();
			$table->boolean('talentGroup')->default(0);
			$table->primary(['guid','spell','talentGroup']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_talent');
	}

}

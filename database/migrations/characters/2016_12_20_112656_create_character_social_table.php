<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterSocialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_social', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Character Global Unique Identifier');
			$table->integer('friend')->unsigned()->default(0)->index('friend')->comment('Friend Global Unique Identifier');
			$table->boolean('flags')->default(0)->comment('Friend Flags');
			$table->string('note', 48)->default('')->comment('Friend Note');
			$table->primary(['guid','friend','flags']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_social');
	}

}

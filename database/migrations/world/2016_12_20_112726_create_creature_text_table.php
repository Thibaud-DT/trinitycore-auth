<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_text', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->boolean('groupid')->default(0);
			$table->boolean('id')->default(0);
			$table->text('text')->nullable();
			$table->boolean('type')->default(0);
			$table->boolean('language')->default(0);
			$table->float('probability', 10, 0)->default(0);
			$table->integer('emote')->unsigned()->default(0);
			$table->integer('duration')->unsigned()->default(0);
			$table->integer('sound')->unsigned()->default(0);
			$table->integer('BroadcastTextId')->default(0);
			$table->boolean('TextRange')->default(0);
			$table->string('comment')->nullable()->default('');
			$table->primary(['entry','groupid','id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_text');
	}

}

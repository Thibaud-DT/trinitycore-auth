<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBroadcastTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('broadcast_text', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->integer('Language')->unsigned()->default(0);
			$table->text('MaleText')->nullable();
			$table->text('FemaleText')->nullable();
			$table->integer('EmoteID0')->unsigned()->default(0);
			$table->integer('EmoteID1')->unsigned()->default(0);
			$table->integer('EmoteID2')->unsigned()->default(0);
			$table->integer('EmoteDelay0')->unsigned()->default(0);
			$table->integer('EmoteDelay1')->unsigned()->default(0);
			$table->integer('EmoteDelay2')->unsigned()->default(0);
			$table->integer('SoundId')->unsigned()->default(0);
			$table->integer('Unk1')->unsigned()->default(0);
			$table->integer('Unk2')->unsigned()->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('broadcast_text');
	}

}

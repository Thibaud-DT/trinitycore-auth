<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureFormationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_formations', function(Blueprint $table)
		{
			$table->integer('leaderGUID')->unsigned()->default(0);
			$table->integer('memberGUID')->unsigned()->default(0)->primary();
			$table->float('dist', 10, 0)->unsigned();
			$table->float('angle', 10, 0)->unsigned();
			$table->integer('groupAI')->unsigned();
			$table->smallInteger('point_1')->unsigned()->default(0);
			$table->smallInteger('point_2')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_formations');
	}

}

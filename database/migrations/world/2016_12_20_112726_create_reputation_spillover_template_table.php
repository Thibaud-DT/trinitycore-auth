<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReputationSpilloverTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('reputation_spillover_template', function(Blueprint $table)
		{
			$table->smallInteger('faction')->unsigned()->default(0)->primary()->comment('faction entry');
			$table->smallInteger('faction1')->unsigned()->default(0)->comment('faction to give spillover for');
			$table->float('rate_1', 10, 0)->default(0)->comment('the given rep points * rate');
			$table->boolean('rank_1')->default(0)->comment('max rank,above this will not give any spillover');
			$table->smallInteger('faction2')->unsigned()->default(0);
			$table->float('rate_2', 10, 0)->default(0);
			$table->boolean('rank_2')->default(0);
			$table->smallInteger('faction3')->unsigned()->default(0);
			$table->float('rate_3', 10, 0)->default(0);
			$table->boolean('rank_3')->default(0);
			$table->smallInteger('faction4')->unsigned()->default(0);
			$table->float('rate_4', 10, 0)->default(0);
			$table->boolean('rank_4')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('reputation_spillover_template');
	}

}

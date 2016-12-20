<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureClasslevelstatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_classlevelstats', function(Blueprint $table)
		{
			$table->boolean('level');
			$table->boolean('class');
			$table->smallInteger('basehp0')->unsigned()->default(1);
			$table->smallInteger('basehp1')->unsigned()->default(1);
			$table->smallInteger('basehp2')->unsigned()->default(1);
			$table->smallInteger('basemana')->unsigned()->default(0);
			$table->smallInteger('basearmor')->unsigned()->default(1);
			$table->smallInteger('attackpower')->unsigned()->default(0);
			$table->smallInteger('rangedattackpower')->unsigned()->default(0);
			$table->float('damage_base', 10, 0)->default(0);
			$table->float('damage_exp1', 10, 0)->default(0);
			$table->float('damage_exp2', 10, 0)->default(0);
			$table->text('comment', 65535)->nullable();
			$table->primary(['level','class']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('creature_classlevelstats');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpcTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('npc_text', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->text('text0_0')->nullable();
			$table->text('text0_1')->nullable();
			$table->integer('BroadcastTextID0')->default(0);
			$table->boolean('lang0')->default(0);
			$table->float('Probability0', 10, 0)->default(0);
			$table->smallInteger('em0_0')->unsigned()->default(0);
			$table->smallInteger('em0_1')->unsigned()->default(0);
			$table->smallInteger('em0_2')->unsigned()->default(0);
			$table->smallInteger('em0_3')->unsigned()->default(0);
			$table->smallInteger('em0_4')->unsigned()->default(0);
			$table->smallInteger('em0_5')->unsigned()->default(0);
			$table->text('text1_0')->nullable();
			$table->text('text1_1')->nullable();
			$table->integer('BroadcastTextID1')->default(0);
			$table->boolean('lang1')->default(0);
			$table->float('Probability1', 10, 0)->default(0);
			$table->smallInteger('em1_0')->unsigned()->default(0);
			$table->smallInteger('em1_1')->unsigned()->default(0);
			$table->smallInteger('em1_2')->unsigned()->default(0);
			$table->smallInteger('em1_3')->unsigned()->default(0);
			$table->smallInteger('em1_4')->unsigned()->default(0);
			$table->smallInteger('em1_5')->unsigned()->default(0);
			$table->text('text2_0')->nullable();
			$table->text('text2_1')->nullable();
			$table->integer('BroadcastTextID2')->default(0);
			$table->boolean('lang2')->default(0);
			$table->float('Probability2', 10, 0)->default(0);
			$table->smallInteger('em2_0')->unsigned()->default(0);
			$table->smallInteger('em2_1')->unsigned()->default(0);
			$table->smallInteger('em2_2')->unsigned()->default(0);
			$table->smallInteger('em2_3')->unsigned()->default(0);
			$table->smallInteger('em2_4')->unsigned()->default(0);
			$table->smallInteger('em2_5')->unsigned()->default(0);
			$table->text('text3_0')->nullable();
			$table->text('text3_1')->nullable();
			$table->integer('BroadcastTextID3')->default(0);
			$table->boolean('lang3')->default(0);
			$table->float('Probability3', 10, 0)->default(0);
			$table->smallInteger('em3_0')->unsigned()->default(0);
			$table->smallInteger('em3_1')->unsigned()->default(0);
			$table->smallInteger('em3_2')->unsigned()->default(0);
			$table->smallInteger('em3_3')->unsigned()->default(0);
			$table->smallInteger('em3_4')->unsigned()->default(0);
			$table->smallInteger('em3_5')->unsigned()->default(0);
			$table->text('text4_0')->nullable();
			$table->text('text4_1')->nullable();
			$table->integer('BroadcastTextID4')->default(0);
			$table->boolean('lang4')->default(0);
			$table->float('Probability4', 10, 0)->default(0);
			$table->smallInteger('em4_0')->unsigned()->default(0);
			$table->smallInteger('em4_1')->unsigned()->default(0);
			$table->smallInteger('em4_2')->unsigned()->default(0);
			$table->smallInteger('em4_3')->unsigned()->default(0);
			$table->smallInteger('em4_4')->unsigned()->default(0);
			$table->smallInteger('em4_5')->unsigned()->default(0);
			$table->text('text5_0')->nullable();
			$table->text('text5_1')->nullable();
			$table->integer('BroadcastTextID5')->default(0);
			$table->boolean('lang5')->default(0);
			$table->float('Probability5', 10, 0)->default(0);
			$table->smallInteger('em5_0')->unsigned()->default(0);
			$table->smallInteger('em5_1')->unsigned()->default(0);
			$table->smallInteger('em5_2')->unsigned()->default(0);
			$table->smallInteger('em5_3')->unsigned()->default(0);
			$table->smallInteger('em5_4')->unsigned()->default(0);
			$table->smallInteger('em5_5')->unsigned()->default(0);
			$table->text('text6_0')->nullable();
			$table->text('text6_1')->nullable();
			$table->integer('BroadcastTextID6')->default(0);
			$table->boolean('lang6')->default(0);
			$table->float('Probability6', 10, 0)->default(0);
			$table->smallInteger('em6_0')->unsigned()->default(0);
			$table->smallInteger('em6_1')->unsigned()->default(0);
			$table->smallInteger('em6_2')->unsigned()->default(0);
			$table->smallInteger('em6_3')->unsigned()->default(0);
			$table->smallInteger('em6_4')->unsigned()->default(0);
			$table->smallInteger('em6_5')->unsigned()->default(0);
			$table->text('text7_0')->nullable();
			$table->text('text7_1')->nullable();
			$table->integer('BroadcastTextID7')->default(0);
			$table->boolean('lang7')->default(0);
			$table->float('Probability7', 10, 0)->default(0);
			$table->smallInteger('em7_0')->unsigned()->default(0);
			$table->smallInteger('em7_1')->unsigned()->default(0);
			$table->smallInteger('em7_2')->unsigned()->default(0);
			$table->smallInteger('em7_3')->unsigned()->default(0);
			$table->smallInteger('em7_4')->unsigned()->default(0);
			$table->smallInteger('em7_5')->unsigned()->default(0);
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
		Schema::connection('world')->drop('npc_text');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesNpcTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_npc_text', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->text('Text0_0_loc1')->nullable();
			$table->text('Text0_0_loc2')->nullable();
			$table->text('Text0_0_loc3')->nullable();
			$table->text('Text0_0_loc4')->nullable();
			$table->text('Text0_0_loc5')->nullable();
			$table->text('Text0_0_loc6')->nullable();
			$table->text('Text0_0_loc7')->nullable();
			$table->text('Text0_0_loc8')->nullable();
			$table->text('Text0_1_loc1')->nullable();
			$table->text('Text0_1_loc2')->nullable();
			$table->text('Text0_1_loc3')->nullable();
			$table->text('Text0_1_loc4')->nullable();
			$table->text('Text0_1_loc5')->nullable();
			$table->text('Text0_1_loc6')->nullable();
			$table->text('Text0_1_loc7')->nullable();
			$table->text('Text0_1_loc8')->nullable();
			$table->text('Text1_0_loc1')->nullable();
			$table->text('Text1_0_loc2')->nullable();
			$table->text('Text1_0_loc3')->nullable();
			$table->text('Text1_0_loc4')->nullable();
			$table->text('Text1_0_loc5')->nullable();
			$table->text('Text1_0_loc6')->nullable();
			$table->text('Text1_0_loc7')->nullable();
			$table->text('Text1_0_loc8')->nullable();
			$table->text('Text1_1_loc1')->nullable();
			$table->text('Text1_1_loc2')->nullable();
			$table->text('Text1_1_loc3')->nullable();
			$table->text('Text1_1_loc4')->nullable();
			$table->text('Text1_1_loc5')->nullable();
			$table->text('Text1_1_loc6')->nullable();
			$table->text('Text1_1_loc7')->nullable();
			$table->text('Text1_1_loc8')->nullable();
			$table->text('Text2_0_loc1')->nullable();
			$table->text('Text2_0_loc2')->nullable();
			$table->text('Text2_0_loc3')->nullable();
			$table->text('Text2_0_loc4')->nullable();
			$table->text('Text2_0_loc5')->nullable();
			$table->text('Text2_0_loc6')->nullable();
			$table->text('Text2_0_loc7')->nullable();
			$table->text('Text2_0_loc8')->nullable();
			$table->text('Text2_1_loc1')->nullable();
			$table->text('Text2_1_loc2')->nullable();
			$table->text('Text2_1_loc3')->nullable();
			$table->text('Text2_1_loc4')->nullable();
			$table->text('Text2_1_loc5')->nullable();
			$table->text('Text2_1_loc6')->nullable();
			$table->text('Text2_1_loc7')->nullable();
			$table->text('Text2_1_loc8')->nullable();
			$table->text('Text3_0_loc1')->nullable();
			$table->text('Text3_0_loc2')->nullable();
			$table->text('Text3_0_loc3')->nullable();
			$table->text('Text3_0_loc4')->nullable();
			$table->text('Text3_0_loc5')->nullable();
			$table->text('Text3_0_loc6')->nullable();
			$table->text('Text3_0_loc7')->nullable();
			$table->text('Text3_0_loc8')->nullable();
			$table->text('Text3_1_loc1')->nullable();
			$table->text('Text3_1_loc2')->nullable();
			$table->text('Text3_1_loc3')->nullable();
			$table->text('Text3_1_loc4')->nullable();
			$table->text('Text3_1_loc5')->nullable();
			$table->text('Text3_1_loc6')->nullable();
			$table->text('Text3_1_loc7')->nullable();
			$table->text('Text3_1_loc8')->nullable();
			$table->text('Text4_0_loc1')->nullable();
			$table->text('Text4_0_loc2')->nullable();
			$table->text('Text4_0_loc3')->nullable();
			$table->text('Text4_0_loc4')->nullable();
			$table->text('Text4_0_loc5')->nullable();
			$table->text('Text4_0_loc6')->nullable();
			$table->text('Text4_0_loc7')->nullable();
			$table->text('Text4_0_loc8')->nullable();
			$table->text('Text4_1_loc1')->nullable();
			$table->text('Text4_1_loc2')->nullable();
			$table->text('Text4_1_loc3')->nullable();
			$table->text('Text4_1_loc4')->nullable();
			$table->text('Text4_1_loc5')->nullable();
			$table->text('Text4_1_loc6')->nullable();
			$table->text('Text4_1_loc7')->nullable();
			$table->text('Text4_1_loc8')->nullable();
			$table->text('Text5_0_loc1')->nullable();
			$table->text('Text5_0_loc2')->nullable();
			$table->text('Text5_0_loc3')->nullable();
			$table->text('Text5_0_loc4')->nullable();
			$table->text('Text5_0_loc5')->nullable();
			$table->text('Text5_0_loc6')->nullable();
			$table->text('Text5_0_loc7')->nullable();
			$table->text('Text5_0_loc8')->nullable();
			$table->text('Text5_1_loc1')->nullable();
			$table->text('Text5_1_loc2')->nullable();
			$table->text('Text5_1_loc3')->nullable();
			$table->text('Text5_1_loc4')->nullable();
			$table->text('Text5_1_loc5')->nullable();
			$table->text('Text5_1_loc6')->nullable();
			$table->text('Text5_1_loc7')->nullable();
			$table->text('Text5_1_loc8')->nullable();
			$table->text('Text6_0_loc1')->nullable();
			$table->text('Text6_0_loc2')->nullable();
			$table->text('Text6_0_loc3')->nullable();
			$table->text('Text6_0_loc4')->nullable();
			$table->text('Text6_0_loc5')->nullable();
			$table->text('Text6_0_loc6')->nullable();
			$table->text('Text6_0_loc7')->nullable();
			$table->text('Text6_0_loc8')->nullable();
			$table->text('Text6_1_loc1')->nullable();
			$table->text('Text6_1_loc2')->nullable();
			$table->text('Text6_1_loc3')->nullable();
			$table->text('Text6_1_loc4')->nullable();
			$table->text('Text6_1_loc5')->nullable();
			$table->text('Text6_1_loc6')->nullable();
			$table->text('Text6_1_loc7')->nullable();
			$table->text('Text6_1_loc8')->nullable();
			$table->text('Text7_0_loc1')->nullable();
			$table->text('Text7_0_loc2')->nullable();
			$table->text('Text7_0_loc3')->nullable();
			$table->text('Text7_0_loc4')->nullable();
			$table->text('Text7_0_loc5')->nullable();
			$table->text('Text7_0_loc6')->nullable();
			$table->text('Text7_0_loc7')->nullable();
			$table->text('Text7_0_loc8')->nullable();
			$table->text('Text7_1_loc1')->nullable();
			$table->text('Text7_1_loc2')->nullable();
			$table->text('Text7_1_loc3')->nullable();
			$table->text('Text7_1_loc4')->nullable();
			$table->text('Text7_1_loc5')->nullable();
			$table->text('Text7_1_loc6')->nullable();
			$table->text('Text7_1_loc7')->nullable();
			$table->text('Text7_1_loc8')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('locales_npc_text');
	}

}

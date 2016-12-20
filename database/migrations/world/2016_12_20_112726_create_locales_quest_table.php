<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalesQuestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('locales_quest', function(Blueprint $table)
		{
			$table->integer('Id')->unsigned()->default(0)->primary();
			$table->text('Title_loc1', 65535)->nullable();
			$table->text('Title_loc2', 65535)->nullable();
			$table->text('Title_loc3', 65535)->nullable();
			$table->text('Title_loc4', 65535)->nullable();
			$table->text('Title_loc5', 65535)->nullable();
			$table->text('Title_loc6', 65535)->nullable();
			$table->text('Title_loc7', 65535)->nullable();
			$table->text('Title_loc8', 65535)->nullable();
			$table->text('Details_loc1', 65535)->nullable();
			$table->text('Details_loc2', 65535)->nullable();
			$table->text('Details_loc3', 65535)->nullable();
			$table->text('Details_loc4', 65535)->nullable();
			$table->text('Details_loc5', 65535)->nullable();
			$table->text('Details_loc6', 65535)->nullable();
			$table->text('Details_loc7', 65535)->nullable();
			$table->text('Details_loc8', 65535)->nullable();
			$table->text('Objectives_loc1', 65535)->nullable();
			$table->text('Objectives_loc2', 65535)->nullable();
			$table->text('Objectives_loc3', 65535)->nullable();
			$table->text('Objectives_loc4', 65535)->nullable();
			$table->text('Objectives_loc5', 65535)->nullable();
			$table->text('Objectives_loc6', 65535)->nullable();
			$table->text('Objectives_loc7', 65535)->nullable();
			$table->text('Objectives_loc8', 65535)->nullable();
			$table->text('OfferRewardText_loc1', 65535)->nullable();
			$table->text('OfferRewardText_loc2', 65535)->nullable();
			$table->text('OfferRewardText_loc3', 65535)->nullable();
			$table->text('OfferRewardText_loc4', 65535)->nullable();
			$table->text('OfferRewardText_loc5', 65535)->nullable();
			$table->text('OfferRewardText_loc6', 65535)->nullable();
			$table->text('OfferRewardText_loc7', 65535)->nullable();
			$table->text('OfferRewardText_loc8', 65535)->nullable();
			$table->text('RequestItemsText_loc1', 65535)->nullable();
			$table->text('RequestItemsText_loc2', 65535)->nullable();
			$table->text('RequestItemsText_loc3', 65535)->nullable();
			$table->text('RequestItemsText_loc4', 65535)->nullable();
			$table->text('RequestItemsText_loc5', 65535)->nullable();
			$table->text('RequestItemsText_loc6', 65535)->nullable();
			$table->text('RequestItemsText_loc7', 65535)->nullable();
			$table->text('RequestItemsText_loc8', 65535)->nullable();
			$table->text('EndText_loc1', 65535)->nullable();
			$table->text('EndText_loc2', 65535)->nullable();
			$table->text('EndText_loc3', 65535)->nullable();
			$table->text('EndText_loc4', 65535)->nullable();
			$table->text('EndText_loc5', 65535)->nullable();
			$table->text('EndText_loc6', 65535)->nullable();
			$table->text('EndText_loc7', 65535)->nullable();
			$table->text('EndText_loc8', 65535)->nullable();
			$table->text('CompletedText_loc1', 65535)->nullable();
			$table->text('CompletedText_loc2', 65535)->nullable();
			$table->text('CompletedText_loc3', 65535)->nullable();
			$table->text('CompletedText_loc4', 65535)->nullable();
			$table->text('CompletedText_loc5', 65535)->nullable();
			$table->text('CompletedText_loc6', 65535)->nullable();
			$table->text('CompletedText_loc7', 65535)->nullable();
			$table->text('CompletedText_loc8', 65535)->nullable();
			$table->text('ObjectiveText1_loc1', 65535)->nullable();
			$table->text('ObjectiveText1_loc2', 65535)->nullable();
			$table->text('ObjectiveText1_loc3', 65535)->nullable();
			$table->text('ObjectiveText1_loc4', 65535)->nullable();
			$table->text('ObjectiveText1_loc5', 65535)->nullable();
			$table->text('ObjectiveText1_loc6', 65535)->nullable();
			$table->text('ObjectiveText1_loc7', 65535)->nullable();
			$table->text('ObjectiveText1_loc8', 65535)->nullable();
			$table->text('ObjectiveText2_loc1', 65535)->nullable();
			$table->text('ObjectiveText2_loc2', 65535)->nullable();
			$table->text('ObjectiveText2_loc3', 65535)->nullable();
			$table->text('ObjectiveText2_loc4', 65535)->nullable();
			$table->text('ObjectiveText2_loc5', 65535)->nullable();
			$table->text('ObjectiveText2_loc6', 65535)->nullable();
			$table->text('ObjectiveText2_loc7', 65535)->nullable();
			$table->text('ObjectiveText2_loc8', 65535)->nullable();
			$table->text('ObjectiveText3_loc1', 65535)->nullable();
			$table->text('ObjectiveText3_loc2', 65535)->nullable();
			$table->text('ObjectiveText3_loc3', 65535)->nullable();
			$table->text('ObjectiveText3_loc4', 65535)->nullable();
			$table->text('ObjectiveText3_loc5', 65535)->nullable();
			$table->text('ObjectiveText3_loc6', 65535)->nullable();
			$table->text('ObjectiveText3_loc7', 65535)->nullable();
			$table->text('ObjectiveText3_loc8', 65535)->nullable();
			$table->text('ObjectiveText4_loc1', 65535)->nullable();
			$table->text('ObjectiveText4_loc2', 65535)->nullable();
			$table->text('ObjectiveText4_loc3', 65535)->nullable();
			$table->text('ObjectiveText4_loc4', 65535)->nullable();
			$table->text('ObjectiveText4_loc5', 65535)->nullable();
			$table->text('ObjectiveText4_loc6', 65535)->nullable();
			$table->text('ObjectiveText4_loc7', 65535)->nullable();
			$table->text('ObjectiveText4_loc8', 65535)->nullable();
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
		Schema::connection('world')->drop('locales_quest');
	}

}

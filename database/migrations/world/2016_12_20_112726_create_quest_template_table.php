<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('quest_template', function(Blueprint $table)
		{
			$table->integer('ID')->unsigned()->default(0)->primary();
			$table->boolean('QuestType')->default(2);
			$table->smallInteger('QuestLevel')->default(1);
			$table->boolean('MinLevel')->default(0);
			$table->smallInteger('QuestSortID')->default(0);
			$table->smallInteger('QuestInfoID')->unsigned()->default(0);
			$table->boolean('SuggestedGroupNum')->default(0);
			$table->smallInteger('RequiredFactionId1')->unsigned()->default(0);
			$table->smallInteger('RequiredFactionId2')->unsigned()->default(0);
			$table->integer('RequiredFactionValue1')->default(0);
			$table->integer('RequiredFactionValue2')->default(0);
			$table->integer('RewardNextQuest')->unsigned()->default(0);
			$table->boolean('RewardXPDifficulty')->default(0);
			$table->integer('RewardMoney')->default(0);
			$table->integer('RewardBonusMoney')->unsigned()->default(0);
			$table->integer('RewardDisplaySpell')->unsigned()->default(0);
			$table->integer('RewardSpell')->default(0);
			$table->integer('RewardHonor')->default(0);
			$table->float('RewardKillHonor', 10, 0)->default(0);
			$table->integer('StartItem')->unsigned()->default(0);
			$table->integer('Flags')->unsigned()->default(0);
			$table->boolean('RequiredPlayerKills')->default(0);
			$table->integer('RewardItem1')->unsigned()->default(0);
			$table->smallInteger('RewardAmount1')->unsigned()->default(0);
			$table->integer('RewardItem2')->unsigned()->default(0);
			$table->smallInteger('RewardAmount2')->unsigned()->default(0);
			$table->integer('RewardItem3')->unsigned()->default(0);
			$table->smallInteger('RewardAmount3')->unsigned()->default(0);
			$table->integer('RewardItem4')->unsigned()->default(0);
			$table->smallInteger('RewardAmount4')->unsigned()->default(0);
			$table->integer('ItemDrop1')->unsigned()->default(0);
			$table->smallInteger('ItemDropQuantity1')->unsigned()->default(0);
			$table->integer('ItemDrop2')->unsigned()->default(0);
			$table->smallInteger('ItemDropQuantity2')->unsigned()->default(0);
			$table->integer('ItemDrop3')->unsigned()->default(0);
			$table->smallInteger('ItemDropQuantity3')->unsigned()->default(0);
			$table->integer('ItemDrop4')->unsigned()->default(0);
			$table->smallInteger('ItemDropQuantity4')->unsigned()->default(0);
			$table->integer('RewardChoiceItemID1')->unsigned()->default(0);
			$table->smallInteger('RewardChoiceItemQuantity1')->unsigned()->default(0);
			$table->integer('RewardChoiceItemID2')->unsigned()->default(0);
			$table->smallInteger('RewardChoiceItemQuantity2')->unsigned()->default(0);
			$table->integer('RewardChoiceItemID3')->unsigned()->default(0);
			$table->smallInteger('RewardChoiceItemQuantity3')->unsigned()->default(0);
			$table->integer('RewardChoiceItemID4')->unsigned()->default(0);
			$table->smallInteger('RewardChoiceItemQuantity4')->unsigned()->default(0);
			$table->integer('RewardChoiceItemID5')->unsigned()->default(0);
			$table->smallInteger('RewardChoiceItemQuantity5')->unsigned()->default(0);
			$table->integer('RewardChoiceItemID6')->unsigned()->default(0);
			$table->smallInteger('RewardChoiceItemQuantity6')->unsigned()->default(0);
			$table->smallInteger('POIContinent')->unsigned()->default(0);
			$table->float('POIx', 10, 0)->default(0);
			$table->float('POIy', 10, 0)->default(0);
			$table->integer('POIPriority')->unsigned()->default(0);
			$table->boolean('RewardTitle')->default(0);
			$table->boolean('RewardTalents')->default(0);
			$table->smallInteger('RewardArenaPoints')->unsigned()->default(0);
			$table->smallInteger('RewardFactionID1')->unsigned()->default(0)->comment('faction id from Faction.dbc in this case');
			$table->integer('RewardFactionValue1')->default(0);
			$table->integer('RewardFactionOverride1')->default(0);
			$table->smallInteger('RewardFactionID2')->unsigned()->default(0)->comment('faction id from Faction.dbc in this case');
			$table->integer('RewardFactionValue2')->default(0);
			$table->integer('RewardFactionOverride2')->default(0);
			$table->smallInteger('RewardFactionID3')->unsigned()->default(0)->comment('faction id from Faction.dbc in this case');
			$table->integer('RewardFactionValue3')->default(0);
			$table->integer('RewardFactionOverride3')->default(0);
			$table->smallInteger('RewardFactionID4')->unsigned()->default(0)->comment('faction id from Faction.dbc in this case');
			$table->integer('RewardFactionValue4')->default(0);
			$table->integer('RewardFactionOverride4')->default(0);
			$table->smallInteger('RewardFactionID5')->unsigned()->default(0)->comment('faction id from Faction.dbc in this case');
			$table->integer('RewardFactionValue5')->default(0);
			$table->integer('RewardFactionOverride5')->default(0);
			$table->integer('TimeAllowed')->unsigned()->default(0);
			$table->smallInteger('AllowableRaces')->unsigned()->default(0);
			$table->text('LogTitle', 65535)->nullable();
			$table->text('LogDescription', 65535)->nullable();
			$table->text('QuestDescription', 65535)->nullable();
			$table->text('AreaDescription', 65535)->nullable();
			$table->text('QuestCompletionLog', 65535)->nullable();
			$table->integer('RequiredNpcOrGo1')->default(0);
			$table->integer('RequiredNpcOrGo2')->default(0);
			$table->integer('RequiredNpcOrGo3')->default(0);
			$table->integer('RequiredNpcOrGo4')->default(0);
			$table->smallInteger('RequiredNpcOrGoCount1')->unsigned()->default(0);
			$table->smallInteger('RequiredNpcOrGoCount2')->unsigned()->default(0);
			$table->smallInteger('RequiredNpcOrGoCount3')->unsigned()->default(0);
			$table->smallInteger('RequiredNpcOrGoCount4')->unsigned()->default(0);
			$table->integer('RequiredItemId1')->unsigned()->default(0);
			$table->integer('RequiredItemId2')->unsigned()->default(0);
			$table->integer('RequiredItemId3')->unsigned()->default(0);
			$table->integer('RequiredItemId4')->unsigned()->default(0);
			$table->integer('RequiredItemId5')->unsigned()->default(0);
			$table->integer('RequiredItemId6')->unsigned()->default(0);
			$table->smallInteger('RequiredItemCount1')->unsigned()->default(0);
			$table->smallInteger('RequiredItemCount2')->unsigned()->default(0);
			$table->smallInteger('RequiredItemCount3')->unsigned()->default(0);
			$table->smallInteger('RequiredItemCount4')->unsigned()->default(0);
			$table->smallInteger('RequiredItemCount5')->unsigned()->default(0);
			$table->smallInteger('RequiredItemCount6')->unsigned()->default(0);
			$table->boolean('Unknown0')->default(0);
			$table->text('ObjectiveText1', 65535)->nullable();
			$table->text('ObjectiveText2', 65535)->nullable();
			$table->text('ObjectiveText3', 65535)->nullable();
			$table->text('ObjectiveText4', 65535)->nullable();
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
		Schema::connection('world')->drop('quest_template');
	}

}

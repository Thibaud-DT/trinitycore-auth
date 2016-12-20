<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('item_template', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->boolean('class')->default(0)->index('items_index');
			$table->boolean('subclass')->default(0);
			$table->boolean('SoundOverrideSubclass')->default(-1);
			$table->string('name')->default('')->index('idx_name');
			$table->integer('displayid')->unsigned()->default(0);
			$table->boolean('Quality')->default(0);
			$table->integer('Flags')->unsigned()->default(0);
			$table->integer('FlagsExtra')->unsigned()->default(0);
			$table->boolean('BuyCount')->default(1);
			$table->bigInteger('BuyPrice')->default(0);
			$table->integer('SellPrice')->unsigned()->default(0);
			$table->boolean('InventoryType')->default(0);
			$table->integer('AllowableClass')->default(-1);
			$table->integer('AllowableRace')->default(-1);
			$table->smallInteger('ItemLevel')->unsigned()->default(0);
			$table->boolean('RequiredLevel')->default(0);
			$table->smallInteger('RequiredSkill')->unsigned()->default(0);
			$table->smallInteger('RequiredSkillRank')->unsigned()->default(0);
			$table->integer('requiredspell')->unsigned()->default(0);
			$table->integer('requiredhonorrank')->unsigned()->default(0);
			$table->integer('RequiredCityRank')->unsigned()->default(0);
			$table->smallInteger('RequiredReputationFaction')->unsigned()->default(0);
			$table->smallInteger('RequiredReputationRank')->unsigned()->default(0);
			$table->integer('maxcount')->default(0);
			$table->integer('stackable')->nullable()->default(1);
			$table->boolean('ContainerSlots')->default(0);
			$table->boolean('StatsCount')->default(0);
			$table->boolean('stat_type1')->default(0);
			$table->smallInteger('stat_value1')->default(0);
			$table->boolean('stat_type2')->default(0);
			$table->smallInteger('stat_value2')->default(0);
			$table->boolean('stat_type3')->default(0);
			$table->smallInteger('stat_value3')->default(0);
			$table->boolean('stat_type4')->default(0);
			$table->smallInteger('stat_value4')->default(0);
			$table->boolean('stat_type5')->default(0);
			$table->smallInteger('stat_value5')->default(0);
			$table->boolean('stat_type6')->default(0);
			$table->smallInteger('stat_value6')->default(0);
			$table->boolean('stat_type7')->default(0);
			$table->smallInteger('stat_value7')->default(0);
			$table->boolean('stat_type8')->default(0);
			$table->smallInteger('stat_value8')->default(0);
			$table->boolean('stat_type9')->default(0);
			$table->smallInteger('stat_value9')->default(0);
			$table->boolean('stat_type10')->default(0);
			$table->smallInteger('stat_value10')->default(0);
			$table->smallInteger('ScalingStatDistribution')->default(0);
			$table->integer('ScalingStatValue')->unsigned()->default(0);
			$table->float('dmg_min1', 10, 0)->default(0);
			$table->float('dmg_max1', 10, 0)->default(0);
			$table->boolean('dmg_type1')->default(0);
			$table->float('dmg_min2', 10, 0)->default(0);
			$table->float('dmg_max2', 10, 0)->default(0);
			$table->boolean('dmg_type2')->default(0);
			$table->smallInteger('armor')->unsigned()->default(0);
			$table->boolean('holy_res')->default(0);
			$table->boolean('fire_res')->default(0);
			$table->boolean('nature_res')->default(0);
			$table->boolean('frost_res')->default(0);
			$table->boolean('shadow_res')->default(0);
			$table->boolean('arcane_res')->default(0);
			$table->smallInteger('delay')->unsigned()->default(1000);
			$table->boolean('ammo_type')->default(0);
			$table->float('RangedModRange', 10, 0)->default(0);
			$table->integer('spellid_1')->default(0);
			$table->boolean('spelltrigger_1')->default(0);
			$table->smallInteger('spellcharges_1')->default(0);
			$table->float('spellppmRate_1', 10, 0)->default(0);
			$table->integer('spellcooldown_1')->default(-1);
			$table->smallInteger('spellcategory_1')->unsigned()->default(0);
			$table->integer('spellcategorycooldown_1')->default(-1);
			$table->integer('spellid_2')->default(0);
			$table->boolean('spelltrigger_2')->default(0);
			$table->smallInteger('spellcharges_2')->default(0);
			$table->float('spellppmRate_2', 10, 0)->default(0);
			$table->integer('spellcooldown_2')->default(-1);
			$table->smallInteger('spellcategory_2')->unsigned()->default(0);
			$table->integer('spellcategorycooldown_2')->default(-1);
			$table->integer('spellid_3')->default(0);
			$table->boolean('spelltrigger_3')->default(0);
			$table->smallInteger('spellcharges_3')->default(0);
			$table->float('spellppmRate_3', 10, 0)->default(0);
			$table->integer('spellcooldown_3')->default(-1);
			$table->smallInteger('spellcategory_3')->unsigned()->default(0);
			$table->integer('spellcategorycooldown_3')->default(-1);
			$table->integer('spellid_4')->default(0);
			$table->boolean('spelltrigger_4')->default(0);
			$table->smallInteger('spellcharges_4')->default(0);
			$table->float('spellppmRate_4', 10, 0)->default(0);
			$table->integer('spellcooldown_4')->default(-1);
			$table->smallInteger('spellcategory_4')->unsigned()->default(0);
			$table->integer('spellcategorycooldown_4')->default(-1);
			$table->integer('spellid_5')->default(0);
			$table->boolean('spelltrigger_5')->default(0);
			$table->smallInteger('spellcharges_5')->default(0);
			$table->float('spellppmRate_5', 10, 0)->default(0);
			$table->integer('spellcooldown_5')->default(-1);
			$table->smallInteger('spellcategory_5')->unsigned()->default(0);
			$table->integer('spellcategorycooldown_5')->default(-1);
			$table->boolean('bonding')->default(0);
			$table->string('description')->default('');
			$table->integer('PageText')->unsigned()->default(0);
			$table->boolean('LanguageID')->default(0);
			$table->boolean('PageMaterial')->default(0);
			$table->integer('startquest')->unsigned()->default(0);
			$table->integer('lockid')->unsigned()->default(0);
			$table->boolean('Material')->default(0);
			$table->boolean('sheath')->default(0);
			$table->integer('RandomProperty')->default(0);
			$table->integer('RandomSuffix')->unsigned()->default(0);
			$table->integer('block')->unsigned()->default(0);
			$table->integer('itemset')->unsigned()->default(0);
			$table->smallInteger('MaxDurability')->unsigned()->default(0);
			$table->integer('area')->unsigned()->default(0);
			$table->smallInteger('Map')->default(0);
			$table->integer('BagFamily')->default(0);
			$table->integer('TotemCategory')->default(0);
			$table->boolean('socketColor_1')->default(0);
			$table->integer('socketContent_1')->default(0);
			$table->boolean('socketColor_2')->default(0);
			$table->integer('socketContent_2')->default(0);
			$table->boolean('socketColor_3')->default(0);
			$table->integer('socketContent_3')->default(0);
			$table->integer('socketBonus')->default(0);
			$table->integer('GemProperties')->default(0);
			$table->smallInteger('RequiredDisenchantSkill')->default(-1);
			$table->float('ArmorDamageModifier', 10, 0)->default(0);
			$table->integer('duration')->unsigned()->default(0);
			$table->smallInteger('ItemLimitCategory')->default(0);
			$table->integer('HolidayId')->unsigned()->default(0);
			$table->string('ScriptName', 64)->default('');
			$table->integer('DisenchantID')->unsigned()->default(0);
			$table->boolean('FoodType')->default(0);
			$table->integer('minMoneyLoot')->unsigned()->default(0);
			$table->integer('maxMoneyLoot')->unsigned()->default(0);
			$table->integer('flagsCustom')->unsigned()->default(0);
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
		Schema::connection('world')->drop('item_template');
	}

}

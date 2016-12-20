<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpellDbcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('spell_dbc', function(Blueprint $table)
		{
			$table->integer('Id')->unsigned()->primary();
			$table->integer('Dispel')->unsigned()->default(0);
			$table->integer('Mechanic')->unsigned()->default(0);
			$table->integer('Attributes')->unsigned()->default(0);
			$table->integer('AttributesEx')->unsigned()->default(0);
			$table->integer('AttributesEx2')->unsigned()->default(0);
			$table->integer('AttributesEx3')->unsigned()->default(0);
			$table->integer('AttributesEx4')->unsigned()->default(0);
			$table->integer('AttributesEx5')->unsigned()->default(0);
			$table->integer('AttributesEx6')->unsigned()->default(0);
			$table->integer('AttributesEx7')->unsigned()->default(0);
			$table->integer('Stances')->unsigned()->default(0);
			$table->integer('StancesNot')->unsigned()->default(0);
			$table->integer('Targets')->unsigned()->default(0);
			$table->integer('CastingTimeIndex')->unsigned()->default(1);
			$table->integer('AuraInterruptFlags')->unsigned()->default(0);
			$table->integer('ProcFlags')->unsigned()->default(0);
			$table->integer('ProcChance')->unsigned()->default(0);
			$table->integer('ProcCharges')->unsigned()->default(0);
			$table->integer('MaxLevel')->unsigned()->default(0);
			$table->integer('BaseLevel')->unsigned()->default(0);
			$table->integer('SpellLevel')->unsigned()->default(0);
			$table->integer('DurationIndex')->unsigned()->default(0);
			$table->integer('RangeIndex')->unsigned()->default(1);
			$table->integer('StackAmount')->unsigned()->default(0);
			$table->integer('EquippedItemClass')->default(-1);
			$table->integer('EquippedItemSubClassMask')->default(0);
			$table->integer('EquippedItemInventoryTypeMask')->default(0);
			$table->integer('Effect1')->unsigned()->default(0);
			$table->integer('Effect2')->unsigned()->default(0);
			$table->integer('Effect3')->unsigned()->default(0);
			$table->integer('EffectDieSides1')->default(0);
			$table->integer('EffectDieSides2')->default(0);
			$table->integer('EffectDieSides3')->default(0);
			$table->float('EffectRealPointsPerLevel1', 10, 0)->default(0);
			$table->float('EffectRealPointsPerLevel2', 10, 0)->default(0);
			$table->float('EffectRealPointsPerLevel3', 10, 0)->default(0);
			$table->integer('EffectBasePoints1')->default(0);
			$table->integer('EffectBasePoints2')->default(0);
			$table->integer('EffectBasePoints3')->default(0);
			$table->integer('EffectMechanic1')->unsigned()->default(0);
			$table->integer('EffectMechanic2')->unsigned()->default(0);
			$table->integer('EffectMechanic3')->unsigned()->default(0);
			$table->integer('EffectImplicitTargetA1')->unsigned()->default(0);
			$table->integer('EffectImplicitTargetA2')->unsigned()->default(0);
			$table->integer('EffectImplicitTargetA3')->unsigned()->default(0);
			$table->integer('EffectImplicitTargetB1')->unsigned()->default(0);
			$table->integer('EffectImplicitTargetB2')->unsigned()->default(0);
			$table->integer('EffectImplicitTargetB3')->unsigned()->default(0);
			$table->integer('EffectRadiusIndex1')->unsigned()->default(0);
			$table->integer('EffectRadiusIndex2')->unsigned()->default(0);
			$table->integer('EffectRadiusIndex3')->unsigned()->default(0);
			$table->integer('EffectApplyAuraName1')->unsigned()->default(0);
			$table->integer('EffectApplyAuraName2')->unsigned()->default(0);
			$table->integer('EffectApplyAuraName3')->unsigned()->default(0);
			$table->integer('EffectAmplitude1')->default(0);
			$table->integer('EffectAmplitude2')->default(0);
			$table->integer('EffectAmplitude3')->default(0);
			$table->float('EffectMultipleValue1', 10, 0)->default(0);
			$table->float('EffectMultipleValue2', 10, 0)->default(0);
			$table->float('EffectMultipleValue3', 10, 0)->default(0);
			$table->integer('EffectItemType1')->unsigned()->default(0);
			$table->integer('EffectItemType2')->unsigned()->default(0);
			$table->integer('EffectItemType3')->unsigned()->default(0);
			$table->integer('EffectMiscValue1')->default(0);
			$table->integer('EffectMiscValue2')->default(0);
			$table->integer('EffectMiscValue3')->default(0);
			$table->integer('EffectMiscValueB1')->default(0);
			$table->integer('EffectMiscValueB2')->default(0);
			$table->integer('EffectMiscValueB3')->default(0);
			$table->integer('EffectTriggerSpell1')->unsigned()->default(0);
			$table->integer('EffectTriggerSpell2')->unsigned()->default(0);
			$table->integer('EffectTriggerSpell3')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskA1')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskA2')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskA3')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskB1')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskB2')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskB3')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskC1')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskC2')->unsigned()->default(0);
			$table->integer('EffectSpellClassMaskC3')->unsigned()->default(0);
			$table->integer('MaxTargetLevel')->unsigned()->default(0);
			$table->integer('SpellFamilyName')->unsigned()->default(0);
			$table->integer('SpellFamilyFlags1')->unsigned()->default(0);
			$table->integer('SpellFamilyFlags2')->unsigned()->default(0);
			$table->integer('SpellFamilyFlags3')->unsigned()->default(0);
			$table->integer('MaxAffectedTargets')->unsigned()->default(0);
			$table->integer('DmgClass')->unsigned()->default(0);
			$table->integer('PreventionType')->unsigned()->default(0);
			$table->float('DmgMultiplier1', 10, 0)->default(0);
			$table->float('DmgMultiplier2', 10, 0)->default(0);
			$table->float('DmgMultiplier3', 10, 0)->default(0);
			$table->integer('AreaGroupId')->default(0);
			$table->integer('SchoolMask')->unsigned()->default(0);
			$table->text('Comment', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('spell_dbc');
	}

}

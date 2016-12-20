<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCreatureTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('creature_template', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->integer('difficulty_entry_1')->unsigned()->default(0);
			$table->integer('difficulty_entry_2')->unsigned()->default(0);
			$table->integer('difficulty_entry_3')->unsigned()->default(0);
			$table->integer('KillCredit1')->unsigned()->default(0);
			$table->integer('KillCredit2')->unsigned()->default(0);
			$table->integer('modelid1')->unsigned()->default(0);
			$table->integer('modelid2')->unsigned()->default(0);
			$table->integer('modelid3')->unsigned()->default(0);
			$table->integer('modelid4')->unsigned()->default(0);
			$table->char('name', 100)->default(0)->index('idx_name');
			$table->char('subname', 100)->nullable();
			$table->char('IconName', 100)->nullable();
			$table->integer('gossip_menu_id')->unsigned()->default(0);
			$table->boolean('minlevel')->default(1);
			$table->boolean('maxlevel')->default(1);
			$table->smallInteger('exp')->default(0);
			$table->smallInteger('faction')->unsigned()->default(0);
			$table->integer('npcflag')->unsigned()->default(0);
			$table->float('speed_walk', 10, 0)->default(1)->comment('Result of 2.5/2.5, most common value');
			$table->float('speed_run', 10, 0)->default(1.14286)->comment('Result of 8.0/7.0, most common value');
			$table->float('scale', 10, 0)->default(1);
			$table->boolean('rank')->default(0);
			$table->boolean('dmgschool')->default(0);
			$table->integer('BaseAttackTime')->unsigned()->default(0);
			$table->integer('RangeAttackTime')->unsigned()->default(0);
			$table->float('BaseVariance', 10, 0)->default(1);
			$table->float('RangeVariance', 10, 0)->default(1);
			$table->boolean('unit_class')->default(0);
			$table->integer('unit_flags')->unsigned()->default(0);
			$table->integer('unit_flags2')->unsigned()->default(0);
			$table->integer('dynamicflags')->unsigned()->default(0);
			$table->boolean('family')->default(0);
			$table->boolean('trainer_type')->default(0);
			$table->integer('trainer_spell')->unsigned()->default(0);
			$table->boolean('trainer_class')->default(0);
			$table->boolean('trainer_race')->default(0);
			$table->boolean('type')->default(0);
			$table->integer('type_flags')->unsigned()->default(0);
			$table->integer('lootid')->unsigned()->default(0);
			$table->integer('pickpocketloot')->unsigned()->default(0);
			$table->integer('skinloot')->unsigned()->default(0);
			$table->smallInteger('resistance1')->default(0);
			$table->smallInteger('resistance2')->default(0);
			$table->smallInteger('resistance3')->default(0);
			$table->smallInteger('resistance4')->default(0);
			$table->smallInteger('resistance5')->default(0);
			$table->smallInteger('resistance6')->default(0);
			$table->integer('spell1')->unsigned()->default(0);
			$table->integer('spell2')->unsigned()->default(0);
			$table->integer('spell3')->unsigned()->default(0);
			$table->integer('spell4')->unsigned()->default(0);
			$table->integer('spell5')->unsigned()->default(0);
			$table->integer('spell6')->unsigned()->default(0);
			$table->integer('spell7')->unsigned()->default(0);
			$table->integer('spell8')->unsigned()->default(0);
			$table->integer('PetSpellDataId')->unsigned()->default(0);
			$table->integer('VehicleId')->unsigned()->default(0);
			$table->integer('mingold')->unsigned()->default(0);
			$table->integer('maxgold')->unsigned()->default(0);
			$table->char('AIName', 64)->default('');
			$table->boolean('MovementType')->default(0);
			$table->boolean('InhabitType')->default(3);
			$table->float('HoverHeight', 10, 0)->default(1);
			$table->float('HealthModifier', 10, 0)->default(1);
			$table->float('ManaModifier', 10, 0)->default(1);
			$table->float('ArmorModifier', 10, 0)->default(1);
			$table->float('DamageModifier', 10, 0)->default(1);
			$table->float('ExperienceModifier', 10, 0)->default(1);
			$table->boolean('RacialLeader')->default(0);
			$table->integer('movementId')->unsigned()->default(0);
			$table->boolean('RegenHealth')->default(1);
			$table->integer('mechanic_immune_mask')->unsigned()->default(0);
			$table->integer('flags_extra')->unsigned()->default(0);
			$table->char('ScriptName', 64)->default('');
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
		Schema::connection('world')->drop('creature_template');
	}

}

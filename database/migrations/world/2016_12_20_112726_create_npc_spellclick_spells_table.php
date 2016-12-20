<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpcSpellclickSpellsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('npc_spellclick_spells', function(Blueprint $table)
		{
			$table->integer('npc_entry')->unsigned()->comment('reference to creature_template');
			$table->integer('spell_id')->unsigned()->comment('spell which should be casted ');
			$table->boolean('cast_flags')->comment('first bit defines caster: 1=player, 0=creature; second bit defines target, same mapping as caster bit');
			$table->smallInteger('user_type')->unsigned()->default(0)->comment('relation with summoner: 0-no 1-friendly 2-raid 3-party player can click');
			$table->primary(['npc_entry','spell_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('npc_spellclick_spells');
	}

}

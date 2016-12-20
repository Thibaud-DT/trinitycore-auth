<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillDiscoveryTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('skill_discovery_template', function(Blueprint $table)
		{
			$table->integer('spellId')->unsigned()->default(0)->comment('SpellId of the discoverable spell');
			$table->integer('reqSpell')->unsigned()->default(0)->comment('spell requirement');
			$table->smallInteger('reqSkillValue')->unsigned()->default(0)->comment('skill points requirement');
			$table->float('chance', 10, 0)->default(0)->comment('chance to discover');
			$table->primary(['spellId','reqSpell']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('skill_discovery_template');
	}

}

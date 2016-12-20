<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharactersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('characters', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->primary()->comment('Global Unique Identifier');
			$table->integer('account')->unsigned()->default(0)->index('idx_account')->comment('Account Identifier');
			$table->string('name', 12)->index('idx_name');
			$table->boolean('race')->default(0);
			$table->boolean('class')->default(0);
			$table->boolean('gender')->default(0);
			$table->boolean('level')->default(0);
			$table->integer('xp')->unsigned()->default(0);
			$table->integer('money')->unsigned()->default(0);
			$table->boolean('skin')->default(0);
			$table->boolean('face')->default(0);
			$table->boolean('hairStyle')->default(0);
			$table->boolean('hairColor')->default(0);
			$table->boolean('facialStyle')->default(0);
			$table->boolean('bankSlots')->default(0);
			$table->boolean('restState')->default(0);
			$table->integer('playerFlags')->unsigned()->default(0);
			$table->float('position_x', 10, 0)->default(0);
			$table->float('position_y', 10, 0)->default(0);
			$table->float('position_z', 10, 0)->default(0);
			$table->smallInteger('map')->unsigned()->default(0)->comment('Map Identifier');
			$table->integer('instance_id')->unsigned()->default(0);
			$table->boolean('instance_mode_mask')->default(0);
			$table->float('orientation', 10, 0)->default(0);
			$table->text('taximask', 65535);
			$table->boolean('online')->default(0)->index('idx_online');
			$table->boolean('cinematic')->default(0);
			$table->integer('totaltime')->unsigned()->default(0);
			$table->integer('leveltime')->unsigned()->default(0);
			$table->integer('logout_time')->unsigned()->default(0);
			$table->boolean('is_logout_resting')->default(0);
			$table->float('rest_bonus', 10, 0)->default(0);
			$table->integer('resettalents_cost')->unsigned()->default(0);
			$table->integer('resettalents_time')->unsigned()->default(0);
			$table->float('trans_x', 10, 0)->default(0);
			$table->float('trans_y', 10, 0)->default(0);
			$table->float('trans_z', 10, 0)->default(0);
			$table->float('trans_o', 10, 0)->default(0);
			$table->integer('transguid')->unsigned()->default(0);
			$table->smallInteger('extra_flags')->unsigned()->default(0);
			$table->boolean('stable_slots')->default(0);
			$table->smallInteger('at_login')->unsigned()->default(0);
			$table->smallInteger('zone')->unsigned()->default(0);
			$table->integer('death_expire_time')->unsigned()->default(0);
			$table->text('taxi_path', 65535)->nullable();
			$table->integer('arenaPoints')->unsigned()->default(0);
			$table->integer('totalHonorPoints')->unsigned()->default(0);
			$table->integer('todayHonorPoints')->unsigned()->default(0);
			$table->integer('yesterdayHonorPoints')->unsigned()->default(0);
			$table->integer('totalKills')->unsigned()->default(0);
			$table->smallInteger('todayKills')->unsigned()->default(0);
			$table->smallInteger('yesterdayKills')->unsigned()->default(0);
			$table->integer('chosenTitle')->unsigned()->default(0);
			$table->bigInteger('knownCurrencies')->unsigned()->default(0);
			$table->integer('watchedFaction')->unsigned()->default(0);
			$table->boolean('drunk')->default(0);
			$table->integer('health')->unsigned()->default(0);
			$table->integer('power1')->unsigned()->default(0);
			$table->integer('power2')->unsigned()->default(0);
			$table->integer('power3')->unsigned()->default(0);
			$table->integer('power4')->unsigned()->default(0);
			$table->integer('power5')->unsigned()->default(0);
			$table->integer('power6')->unsigned()->default(0);
			$table->integer('power7')->unsigned()->default(0);
			$table->integer('latency')->unsigned()->default(0);
			$table->boolean('talentGroupsCount')->default(1);
			$table->boolean('activeTalentGroup')->default(0);
			$table->text('exploredZones')->nullable();
			$table->text('equipmentCache')->nullable();
			$table->integer('ammoId')->unsigned()->default(0);
			$table->text('knownTitles')->nullable();
			$table->boolean('actionBars')->default(0);
			$table->boolean('grantableLevels')->default(0);
			$table->integer('deleteInfos_Account')->unsigned()->nullable();
			$table->string('deleteInfos_Name', 12)->nullable();
			$table->integer('deleteDate')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('characters');
	}

}

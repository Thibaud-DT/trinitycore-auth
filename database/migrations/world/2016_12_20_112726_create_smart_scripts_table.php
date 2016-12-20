<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSmartScriptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('smart_scripts', function(Blueprint $table)
		{
			$table->integer('entryorguid');
			$table->boolean('source_type')->default(0);
			$table->smallInteger('id')->unsigned()->default(0);
			$table->smallInteger('link')->unsigned()->default(0);
			$table->boolean('event_type')->default(0);
			$table->boolean('event_phase_mask')->default(0);
			$table->boolean('event_chance')->default(100);
			$table->boolean('event_flags')->default(0);
			$table->integer('event_param1')->unsigned()->default(0);
			$table->integer('event_param2')->unsigned()->default(0);
			$table->integer('event_param3')->unsigned()->default(0);
			$table->integer('event_param4')->unsigned()->default(0);
			$table->boolean('action_type')->default(0);
			$table->integer('action_param1')->unsigned()->default(0);
			$table->integer('action_param2')->unsigned()->default(0);
			$table->integer('action_param3')->unsigned()->default(0);
			$table->integer('action_param4')->unsigned()->default(0);
			$table->integer('action_param5')->unsigned()->default(0);
			$table->integer('action_param6')->unsigned()->default(0);
			$table->boolean('target_type')->default(0);
			$table->integer('target_param1')->unsigned()->default(0);
			$table->integer('target_param2')->unsigned()->default(0);
			$table->integer('target_param3')->unsigned()->default(0);
			$table->float('target_x', 10, 0)->default(0);
			$table->float('target_y', 10, 0)->default(0);
			$table->float('target_z', 10, 0)->default(0);
			$table->float('target_o', 10, 0)->default(0);
			$table->text('comment', 65535)->comment('Event Comment');
			$table->primary(['entryorguid','source_type','id','link']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('smart_scripts');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicleTemplateAccessoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('vehicle_template_accessory', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->integer('accessory_entry')->unsigned()->default(0);
			$table->boolean('seat_id')->default(0);
			$table->boolean('minion')->default(0);
			$table->text('description', 65535);
			$table->boolean('summontype')->default(6)->comment('see enum TempSummonType');
			$table->integer('summontimer')->unsigned()->default(30000)->comment('timer, only relevant for certain summontypes');
			$table->primary(['entry','seat_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('vehicle_template_accessory');
	}

}

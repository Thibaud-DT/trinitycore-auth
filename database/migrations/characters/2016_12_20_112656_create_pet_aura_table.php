<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetAuraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('pet_aura', function(Blueprint $table)
		{
			$table->integer('guid')->unsigned()->default(0)->comment('Global Unique Identifier');
			$table->bigInteger('casterGuid')->unsigned()->default(0)->comment('Full Global Unique Identifier');
			$table->integer('spell')->unsigned()->default(0);
			$table->boolean('effectMask')->default(0);
			$table->boolean('recalculateMask')->default(0);
			$table->boolean('stackCount')->default(1);
			$table->integer('amount0');
			$table->integer('amount1');
			$table->integer('amount2');
			$table->integer('base_amount0');
			$table->integer('base_amount1');
			$table->integer('base_amount2');
			$table->integer('maxDuration')->default(0);
			$table->integer('remainTime')->default(0);
			$table->boolean('remainCharges')->default(0);
			$table->primary(['guid','casterGuid','spell','effectMask']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('pet_aura');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNpcVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('npc_vendor', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0);
			$table->smallInteger('slot')->default(0)->index('slot');
			$table->integer('item')->default(0);
			$table->boolean('maxcount')->default(0);
			$table->integer('incrtime')->unsigned()->default(0);
			$table->integer('ExtendedCost')->unsigned()->default(0);
			$table->smallInteger('VerifiedBuild')->nullable()->default(0);
			$table->primary(['entry','item','ExtendedCost']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('npc_vendor');
	}

}

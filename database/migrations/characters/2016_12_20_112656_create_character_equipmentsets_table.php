<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterEquipmentsetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_equipmentsets', function(Blueprint $table)
		{
			$table->integer('guid')->default(0);
			$table->bigInteger('setguid', true);
			$table->boolean('setindex')->default(0)->index('Idx_setindex');
			$table->string('name', 31);
			$table->string('iconname', 100);
			$table->integer('ignore_mask')->unsigned()->default(0);
			$table->integer('item0')->unsigned()->default(0);
			$table->integer('item1')->unsigned()->default(0);
			$table->integer('item2')->unsigned()->default(0);
			$table->integer('item3')->unsigned()->default(0);
			$table->integer('item4')->unsigned()->default(0);
			$table->integer('item5')->unsigned()->default(0);
			$table->integer('item6')->unsigned()->default(0);
			$table->integer('item7')->unsigned()->default(0);
			$table->integer('item8')->unsigned()->default(0);
			$table->integer('item9')->unsigned()->default(0);
			$table->integer('item10')->unsigned()->default(0);
			$table->integer('item11')->unsigned()->default(0);
			$table->integer('item12')->unsigned()->default(0);
			$table->integer('item13')->unsigned()->default(0);
			$table->integer('item14')->unsigned()->default(0);
			$table->integer('item15')->unsigned()->default(0);
			$table->integer('item16')->unsigned()->default(0);
			$table->integer('item17')->unsigned()->default(0);
			$table->integer('item18')->unsigned()->default(0);
			$table->unique(['guid','setguid','setindex'], 'idx_set');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_equipmentsets');
	}

}

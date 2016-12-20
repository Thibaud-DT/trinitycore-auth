<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharacterPetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('character_pet', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary();
			$table->integer('entry')->unsigned()->default(0);
			$table->integer('owner')->unsigned()->default(0)->index('owner');
			$table->integer('modelid')->unsigned()->nullable()->default(0);
			$table->integer('CreatedBySpell')->unsigned()->default(0);
			$table->boolean('PetType')->default(0);
			$table->smallInteger('level')->unsigned()->default(1);
			$table->integer('exp')->unsigned()->default(0);
			$table->boolean('Reactstate')->default(0);
			$table->string('name', 21)->default('Pet');
			$table->boolean('renamed')->default(0);
			$table->boolean('slot')->default(0)->index('idx_slot');
			$table->integer('curhealth')->unsigned()->default(1);
			$table->integer('curmana')->unsigned()->default(0);
			$table->integer('curhappiness')->unsigned()->default(0);
			$table->integer('savetime')->unsigned()->default(0);
			$table->text('abdata', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('character_pet');
	}

}

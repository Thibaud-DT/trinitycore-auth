<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameobjectTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('gameobject_template', function(Blueprint $table)
		{
			$table->integer('entry')->unsigned()->default(0)->primary();
			$table->boolean('type')->default(0);
			$table->integer('displayId')->unsigned()->default(0);
			$table->string('name', 100)->default('')->index('idx_name');
			$table->string('IconName', 100)->default('');
			$table->string('castBarCaption', 100)->default('');
			$table->string('unk1', 100)->default('');
			$table->smallInteger('faction')->unsigned()->default(0);
			$table->integer('flags')->unsigned()->default(0);
			$table->float('size', 10, 0)->default(1);
			$table->integer('Data0')->unsigned()->default(0);
			$table->integer('Data1')->default(0);
			$table->integer('Data2')->unsigned()->default(0);
			$table->integer('Data3')->unsigned()->default(0);
			$table->integer('Data4')->unsigned()->default(0);
			$table->integer('Data5')->unsigned()->default(0);
			$table->integer('Data6')->default(0);
			$table->integer('Data7')->unsigned()->default(0);
			$table->integer('Data8')->unsigned()->default(0);
			$table->integer('Data9')->unsigned()->default(0);
			$table->integer('Data10')->unsigned()->default(0);
			$table->integer('Data11')->unsigned()->default(0);
			$table->integer('Data12')->unsigned()->default(0);
			$table->integer('Data13')->unsigned()->default(0);
			$table->integer('Data14')->unsigned()->default(0);
			$table->integer('Data15')->unsigned()->default(0);
			$table->integer('Data16')->unsigned()->default(0);
			$table->integer('Data17')->unsigned()->default(0);
			$table->integer('Data18')->unsigned()->default(0);
			$table->integer('Data19')->unsigned()->default(0);
			$table->integer('Data20')->unsigned()->default(0);
			$table->integer('Data21')->unsigned()->default(0);
			$table->integer('Data22')->unsigned()->default(0);
			$table->integer('Data23')->unsigned()->default(0);
			$table->char('AIName', 64)->default('');
			$table->string('ScriptName', 64)->default('');
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
		Schema::connection('world')->drop('gameobject_template');
	}

}

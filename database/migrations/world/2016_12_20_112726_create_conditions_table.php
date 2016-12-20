<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('conditions', function(Blueprint $table)
		{
			$table->integer('SourceTypeOrReferenceId')->default(0);
			$table->integer('SourceGroup')->unsigned()->default(0);
			$table->integer('SourceEntry')->default(0);
			$table->integer('SourceId')->default(0);
			$table->integer('ElseGroup')->unsigned()->default(0);
			$table->integer('ConditionTypeOrReference')->default(0);
			$table->boolean('ConditionTarget')->default(0);
			$table->integer('ConditionValue1')->unsigned()->default(0);
			$table->integer('ConditionValue2')->unsigned()->default(0);
			$table->integer('ConditionValue3')->unsigned()->default(0);
			$table->boolean('NegativeCondition')->default(0);
			$table->integer('ErrorType')->unsigned()->default(0);
			$table->integer('ErrorTextId')->unsigned()->default(0);
			$table->char('ScriptName', 64)->default('');
			$table->string('Comment')->nullable();
			$table->primary(['SourceTypeOrReferenceId','SourceGroup','SourceEntry','SourceId','ElseGroup','ConditionTypeOrReference','ConditionTarget','ConditionValue1','ConditionValue2','ConditionValue3']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('conditions');
	}

}

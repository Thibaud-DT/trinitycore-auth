<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGmSubsurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('gm_subsurvey', function(Blueprint $table)
		{
			$table->increments('surveyId');
			$table->integer('questionId')->unsigned()->default(0);
			$table->integer('answer')->unsigned()->default(0);
			$table->text('answerComment', 65535);
			$table->primary(['surveyId','questionId']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('gm_subsurvey');
	}

}

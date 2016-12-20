<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGmSurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('gm_survey', function(Blueprint $table)
		{
			$table->increments('surveyId');
			$table->integer('guid')->unsigned()->default(0);
			$table->integer('mainSurvey')->unsigned()->default(0);
			$table->text('comment');
			$table->integer('createTime')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('gm_survey');
	}

}

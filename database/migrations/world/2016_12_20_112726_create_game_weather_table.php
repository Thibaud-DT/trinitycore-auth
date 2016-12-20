<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameWeatherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world')->create('game_weather', function(Blueprint $table)
		{
			$table->integer('zone')->unsigned()->default(0)->primary();
			$table->boolean('spring_rain_chance')->default(25);
			$table->boolean('spring_snow_chance')->default(25);
			$table->boolean('spring_storm_chance')->default(25);
			$table->boolean('summer_rain_chance')->default(25);
			$table->boolean('summer_snow_chance')->default(25);
			$table->boolean('summer_storm_chance')->default(25);
			$table->boolean('fall_rain_chance')->default(25);
			$table->boolean('fall_snow_chance')->default(25);
			$table->boolean('fall_storm_chance')->default(25);
			$table->boolean('winter_rain_chance')->default(25);
			$table->boolean('winter_snow_chance')->default(25);
			$table->boolean('winter_storm_chance')->default(25);
			$table->char('ScriptName', 64)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('world')->drop('game_weather');
	}

}

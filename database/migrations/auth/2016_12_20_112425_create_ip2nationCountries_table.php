<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIp2nationCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('auth')->create('ip2nationCountries', function(Blueprint $table)
		{
			$table->string('code', 4)->default('')->index('code');
			$table->string('iso_code_2', 2)->default('');
			$table->string('iso_code_3', 3)->nullable()->default('');
			$table->string('iso_country')->default('');
			$table->string('country')->default('');
			$table->float('lat', 10, 0)->default(0);
			$table->float('lon', 10, 0)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('auth')->drop('ip2nationCountries');
	}

}

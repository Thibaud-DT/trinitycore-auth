<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('characters')->create('mail', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary()->comment('Identifier');
			$table->boolean('messageType')->default(0);
			$table->boolean('stationery')->default(41);
			$table->smallInteger('mailTemplateId')->unsigned()->default(0);
			$table->integer('sender')->unsigned()->default(0)->comment('Character Global Unique Identifier');
			$table->integer('receiver')->unsigned()->default(0)->index('idx_receiver')->comment('Character Global Unique Identifier');
			$table->text('subject')->nullable();
			$table->text('body')->nullable();
			$table->boolean('has_items')->default(0);
			$table->integer('expire_time')->unsigned()->default(0);
			$table->integer('deliver_time')->unsigned()->default(0);
			$table->integer('money')->unsigned()->default(0);
			$table->integer('cod')->unsigned()->default(0);
			$table->boolean('checked')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('characters')->drop('mail');
	}

}

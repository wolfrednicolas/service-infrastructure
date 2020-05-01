<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfrastructureConfig extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('infrastructure_config'))
		{
			Schema::create('infrastructure_config', function(Blueprint $table)
			{
				$table->increments('id');
				$table->integer('account_id')->index();
				$table->string('service', 25)->index();
				$table->string('field', 25)->index();
				$table->text('data');
				$table->timestamps();
			});
		}
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('infrastructure_config');
	}

}

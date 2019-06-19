<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFbancoprojTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fbancoproj', function(Blueprint $table)
		{
			$table->integer('bcp_id', true)->comment('Id sequencial');
			$table->integer('bco_id')->comment('Id do banco');
			$table->integer('pro_id')->comment('Id do projeto');
			$table->unique(['bco_id','pro_id'], 'uk_fbancoproj');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fbancoproj');
	}

}

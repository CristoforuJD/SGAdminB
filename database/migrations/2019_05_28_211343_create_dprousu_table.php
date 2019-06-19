<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDprousuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dprousu', function(Blueprint $table)
		{
			$table->integer('pru_id', true)->comment('Id sequencial');
			$table->integer('usu_id')->comment('Id do usuario');
			$table->integer('pro_id')->comment('Id do projeto');
			$table->dateTime('pru_dtsis')->nullable()->default('now()')->comment('Data e hora de inserção');
			$table->unique(['usu_id','pro_id'], 'uk_dprousu');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dprousu');
	}

}

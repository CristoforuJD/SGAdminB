<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDdeparacliforTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ddeparaclifor', function(Blueprint $table)
		{
			$table->integer('dcf_id', true)->comment('Id Cliente Fornecedor');
			$table->integer('cli_id');
			$table->string('dcf_nome', 100)->comment('Nome DePara');
			$table->integer('pro_id');
			$table->unique(['pro_id','dcf_nome'], 'uk_ddeparaclifor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ddeparaclifor');
	}

}

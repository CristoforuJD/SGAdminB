<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlogimpdfcmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flogimpdfcms', function(Blueprint $table)
		{
			$table->integer('lms_id', true)->comment('Id do log');
			$table->integer('ims_id')->comment('Id da Importacao DFC');
			$table->string('ims_descri', 50);
			$table->integer('usu_id')->nullable()->comment('Usuario de execucao');
			$table->dateTime('lms_dtsis')->nullable()->comment('Data e hora execucao');
			$table->integer('lms_erros')->default(0)->comment('Quantidade de Erros');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flogimpdfcms');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDcliforTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dclifor', function(Blueprint $table)
		{
			$table->integer('cli_id', true)->comment('Id sequencial');
			$table->integer('pro_id')->comment('Id do projeto');
			$table->string('cli_nome', 100)->comment('Nome do cliente');
			$table->string('cli_cnpjcpf', 30)->nullable()->comment('CNPJ / CPF');
			$table->dateTime('cli_dtsis')->nullable()->default('now()')->comment('Data e hora insercao');
			$table->unique(['pro_id','cli_nome'], 'uk_dclifor');
			$table->index(['pro_id','cli_cnpjcpf'], 'uk_clifor2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dclifor');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFimporcamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fimporcams', function(Blueprint $table)
		{
			$table->integer('imo_id')->primary('fimporcamento_pk')->comment('Id mestre Importacao orcamento');
			$table->integer('pro_id')->comment('Id do Projeto');
			$table->integer('usu_id')->comment('Usuario de Criacao');
			$table->string('imo_descricao', 200)->comment('Descricao');
			$table->dateTime('imo_dtsis')->nullable()->default('now()')->comment('Data e Hora Criacao');
			$table->integer('imo_erros')->default(0)->comment('Quantidade de erros');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fimporcams');
	}

}

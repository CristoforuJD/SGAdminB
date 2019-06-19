<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFimpdfcMsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fimpdfc_ms', function(Blueprint $table)
		{
			$table->integer('ims_id', true)->comment('Id da Importacao DFC');
			$table->integer('pro_id')->comment('Id do Projeto');
			$table->integer('usu_id')->comment('Usuario Criacao');
			$table->string('ims_descricao', 50)->comment('Descricao');
			$table->string('ims_origemdados', 1)->comment('Origem Dados (Excel ou Banco) E ou B');
			$table->dateTime('ims_dtsis')->nullable()->default('now()')->comment('Data e Hora Criacao');
			$table->integer('ims_errors')->default(0)->comment('Quantidade de erros da importacao');
			$table->date('ims_emis_ini')->nullable()->comment('Dt Emissao Inicial (quando banco)');
			$table->date('ims_emis_fim')->nullable()->comment('Dt Emissao Final (quando banco)');
			$table->date('ims_venc_ini')->nullable();
			$table->date('ims_venc_fim')->nullable();
			$table->string('ims_arquivo', 200)->nullable()->comment('Nome e caminho arquivo importacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fimpdfc_ms');
	}

}

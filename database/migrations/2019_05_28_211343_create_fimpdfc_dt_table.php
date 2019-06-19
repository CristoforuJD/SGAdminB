<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFimpdfcDtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fimpdfc_dt', function(Blueprint $table)
		{
			$table->integer('imi_id', true)->comment('Id do item');
			$table->integer('ims_id');
			$table->string('imi_cnpjcpf', 30)->nullable()->comment('CNPJ ou CPF Cliente Fornecedor');
			$table->string('imi_nomeclifor', 100)->nullable()->comment('Nome Cliente ou Fornecedor');
			$table->decimal('imi_vlprevisto', 10, 0)->default(0)->comment('Valor Previsto');
			$table->decimal('imi_vlmovim', 10, 0)->default(0)->comment('Valor Movimentado');
			$table->date('imi_dtemissao')->comment('Data Emissao / Entrada');
			$table->date('imi_dtvenc_ajustada')->comment('Data de Vecto Ajustada');
			$table->date('imi_dtvenc_orig')->comment('Data de Vencimento Original');
			$table->string('imi_historico', 100)->nullable()->comment('Descricao / Historico Lancamento');
			$table->integer('imi_idbase')->nullable()->comment('Id do Documento base cliente');
			$table->string('imi_docto', 20)->comment('Documento');
			$table->string('imi_serie', 10)->nullable()->comment('Serie do Documento');
			$table->string('imi_status')->nullable()->comment('Status da Importação');
			$table->string('imi_conta', 100)->comment('Conta perfil do lcto');
			$table->string('imi_subprojeto', 60)->nullable()->comment('DePara SubProjeto');
			$table->integer('pla_id')->nullable()->comment('Id Plano de Conta');
			$table->integer('pro_id')->nullable()->comment('Id do projeto sem relac');
			$table->date('imi_dtmovim')->comment('Data do Movimento');
			$table->integer('imi_parcela')->default(0)->comment('Parcela');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fimpdfc_dt');
	}

}

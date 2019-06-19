<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFdfcLactoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fdfc_lacto', function(Blueprint $table)
		{
			$table->integer('dfc_id', true)->comment('Id do DFC');
			$table->integer('pro_id')->comment('Id do Projeto sem constraint');
			$table->integer('usu_id')->comment('Id usuario Importacao');
			$table->integer('cli_id')->comment('Id do Cliente Fornecedor');
			$table->decimal('dfc_vlprevisto', 10, 0)->default(0)->comment('Valor Previsto');
			$table->decimal('dfc_vlmovim', 10, 0)->default(0)->comment('Valor do movimento');
			$table->date('dfc_venc_ajustada')->comment('Data de vencimento ajustada');
			$table->date('dfc_dtvenc_orig')->comment('Data de Vencimento Original');
			$table->string('dfc_docto', 20)->comment('Documento');
			$table->string('dfc_serie', 10)->nullable()->comment('Serie do documento');
			$table->integer('pla_id')->comment('Id da conta');
			$table->integer('sub_id')->comment('Id do SubProjeto');
			$table->integer('imi_id')->nullable()->comment('Id do item de importacao');
			$table->string('dfc_impdig', 1)->comment('Lcto Importado ou Digitado D ou I');
			$table->date('dfc_dtmovim')->comment('Data do movimento');
			$table->date('dfc_dtemissao')->nullable()->comment('Data emissao lcto');
			$table->string('dfc_insert_update', 1)->nullable()->comment('Registro Incluido ou Alterado (i ou a)');
			$table->integer('dfc_parcela')->default(0)->comment('Parcela');
			$table->integer('dfc_rmes')->nullable()->comment('Mes do lancamento realizado');
			$table->integer('dfc_rano')->nullable()->comment('Ano do lancamento realizado');
			$table->dateTime('fdc_dtsis')->nullable()->default('now()');
			$table->integer('for_id')->nullable();
			$table->index(['sub_id','dfc_rano','dfc_rmes','pla_id'], 'ix_fdfc_lacto');
			$table->unique(['pro_id','cli_id','dfc_docto','dfc_serie','dfc_parcela'], 'uk_fdfclacto_documento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fdfc_lacto');
	}

}

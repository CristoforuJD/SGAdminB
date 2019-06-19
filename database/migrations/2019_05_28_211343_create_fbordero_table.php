<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFborderoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fbordero', function(Blueprint $table)
		{
			$table->integer('bor_id', true)->comment('Id do bordero');
			$table->integer('pro_id')->nullable()->comment('Id do projeto');
			$table->date('bor_dataope')->nullable()->comment('Data da Operacao');
			$table->integer('bco_id')->nullable()->comment('Id do Banco');
			$table->integer('car_id')->nullable()->comment('Id da carteira');
			$table->integer('tir_id')->nullable()->comment('Tipo Recebivel');
			$table->integer('url_id')->nullable()->comment('Utilizacao de recurso id');
			$table->string('bor_numero', 20)->nullable()->comment('Numero do bordero');
			$table->integer('bor_qtd_tit')->nullable()->default(0)->comment('Quantidade de titulos');
			$table->decimal('bor_vlr_bruto', 10, 0)->nullable()->default(0)->comment('Valor Bruto');
			$table->integer('bor_qt_recusada')->nullable()->default(0)->comment('Quantidade de titulos recusados');
			$table->decimal('bor_vlr_bruto_recusado', 10, 0)->nullable()->default(0)->comment('Valor bruto Recusado');
			$table->decimal('bor_vlr_bruto_final', 10, 0)->nullable()->default(0)->comment('Valor bruto final');
			$table->smallInteger('bor_qtd_final')->nullable()->comment('Quantidade final de titulos');
			$table->decimal('bor_pz_med_emp', 10, 0)->nullable()->default(0)->comment('Prazo medio ponderado empresa');
			$table->decimal('bor_pz_med_bco', 10, 0)->nullable()->default(0)->comment('Prazo Medio ponderado do banco');
			$table->decimal('bor_float_calc', 10, 0)->nullable()->default(0)->comment('Float Calculado');
			$table->decimal('bor_float_acordado', 10, 0)->nullable()->default(0)->comment('Float acordado');
			$table->decimal('bor_vlr_liquido', 10, 0)->nullable()->default(0)->comment('Valor Liquido');
			$table->dateTime('bor_dtsis')->nullable()->default('now()')->comment('Data e hora sistema insert');
			$table->decimal('bor_float_dif', 10, 0)->nullable()->default(0)->comment('Diferenca float');
			$table->decimal('bor_vlr_tot_tarifas', 10, 0)->nullable()->default(0)->comment('Total tarifas');
			$table->decimal('bor_chk_iof', 10, 0)->nullable()->default(0)->comment('Checagem IOF');
			$table->decimal('bor_taxa_acordado', 10, 0)->nullable()->default(0)->comment('Taxa acordada');
			$table->decimal('bor_vlr_liq_correto', 10, 0)->nullable()->default(0)->comment('Valor liquido correto');
			$table->decimal('bor_chk_liq', 10, 0)->nullable()->default(0)->comment('Valor Líquido Informado(-)Valor Líquido Calculado');
			$table->string('bor_status', 20)->nullable()->comment('Status de diferenca');
			$table->decimal('bor_recompra', 10, 0)->nullable()->default(0)->comment('R$ Descontado do Líquido p/ Recompra');
			$table->decimal('bor_per_recompra', 10, 0)->nullable()->default(0)->comment('% do Líquido Destinado a Recompra');
			$table->decimal('bor_retencao', 10, 0)->nullable()->default(0)->comment('Retencao R$ Descontado do Líquido p/ pagto. Dívida.');
			$table->decimal('bor_per_retencao', 10, 0)->nullable()->default(0)->comment('% retencao do Líquido Destinado ao pagto. Dívida');
			$table->decimal('bor_fomento', 10, 0)->nullable()->default(0)->comment('R$ Descontado do Líquido p/ Fomento');
			$table->decimal('bor_per_fomento', 10, 0)->nullable()->default(0)->comment('% Descontado do Líquido p/ Fomento');
			$table->decimal('bor_liq_recebido', 10, 0)->nullable()->default(0)->comment('Liquido Após Retenções Recompras Desc./Bonif. e Outros Custos');
			$table->date('bor_dt_cred')->nullable()->comment('Data do credito');
			$table->string('bor_contato', 50)->nullable()->comment('Contato');
			$table->decimal('bor_tx_banco', 10, 0)->nullable()->default(0)->comment('Taxas e descontos do banco');
			$table->decimal('bor_tx_empresa', 10, 0)->nullable()->default(0)->comment('Taxas e descontos empresa');
			$table->string('bor_obs', 300)->nullable()->comment('Observações');
			$table->decimal('bor_mutl_pm', 10, 0)->nullable()->default(0)->comment('Multiplicador PM Empresa');
			$table->decimal('bor_mutl_pm_float', 10, 0)->nullable()->default(0)->comment('Multiplicador PM Empresa c/float');
			$table->decimal('bor_cst_sem_iof', 10, 0)->nullable()->default(0)->comment('Custo efetivo total sem IOF');
			$table->decimal('bor_cst_com_iof', 10, 0)->nullable()->default(0)->comment('Custo efetivo total com IOF');
			$table->dateTime('bor_dtupdate')->nullable()->default('now()')->comment('Data e hora sistema update para trigger');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fbordero');
	}

}

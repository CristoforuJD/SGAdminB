<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDdfcmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ddfcmes', function(Blueprint $table)
		{
			$table->integer('dfm_id', true)->comment('Id do DFC Mes');
			$table->integer('dfm_ano')->comment('Ano');
			$table->integer('dfm_mes')->comment('Mes');
			$table->integer('pro_id')->comment('Id do Projeto sem constraint');
			$table->integer('sub_id')->comment('Id do SubProjeto');
			$table->integer('pla_id')->comment('Id da conta');
			$table->integer('pla_ordem')->comment('Ordem Impressao');
			$table->decimal('dfm_saldo_est', 10, 0)->default(0)->comment('Saldo Conta Estrategico');
			$table->decimal('dfm_saldo_prev', 10, 0)->default(0)->comment('Saldo Conta Previsto');
			$table->decimal('dfm_saldo_real', 10, 0)->default(0)->comment('Saldo Conta Realizado');
			$table->decimal('dfm_perc_r', 10, 0)->default(0)->comment('Percentual sobre receita bruta');
			$table->unique(['dfm_ano','dfm_mes','sub_id','pla_id'], 'uk_ddfcmes');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ddfcmes');
	}

}

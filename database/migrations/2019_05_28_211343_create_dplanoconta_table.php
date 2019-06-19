<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDplanocontaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dplanoconta', function(Blueprint $table)
		{
			$table->integer('pla_id', true)->comment('Id do Plano de Contas');
			$table->integer('clp_id')->nullable()->comment('Id da conta padrao');
			$table->integer('pro_id');
			$table->integer('pla_idpai')->nullable()->comment('ID da conta pai DFCL');
			$table->string('pla_nome', 100)->comment('Nome da conta');
			$table->integer('pla_nivel')->comment('Nivel da Contas DFCL');
			$table->integer('pla_ordem')->comment('Ordem da Conta');
			$table->integer('pla_ordem_ini')->default(0)->comment('Ordem inicial nivel 3');
			$table->integer('pla_ordem_fim')->default(0)->comment('Ordem Final 3');
			$table->dateTime('pla_dtsis')->nullable()->default('now()')->comment('Data e hora sistema');
			$table->string('pla_totsn', 1)->default('S');
			$table->integer('plp_id')->comment('Id do plano de contas mestre padrao');
			$table->integer('pla_nivel_dfc')->nullable()->comment('Nivel da Conta DFC');
			$table->string('pla_dfc', 1)->nullable()->comment('Conta DFC S ou N');
			$table->string('pla_dfcl', 1)->nullable()->comment('Conta DFCL S ou N');
			$table->integer('pla_ordem_dfc')->nullable()->default(0)->comment('Ordem da conta para DFC');
			$table->integer('pla_idpai_dfc')->nullable()->comment('Id da conta pai DFC');
			$table->unique(['pro_id','pla_ordem'], 'uk_dplanoconta_ordem');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dplanoconta');
	}

}

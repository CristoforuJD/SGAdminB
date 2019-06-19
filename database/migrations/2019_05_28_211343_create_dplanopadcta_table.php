<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDplanopadctaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dplanopadcta', function(Blueprint $table)
		{
			$table->integer('clp_id', true)->comment('Id da conta padrao');
			$table->integer('plp_id')->comment('Id do Plano Padrao');
			$table->string('clp_nome', 100)->comment('Nome da Conta');
			$table->integer('clp_ordem')->comment('Ordem da Conta');
			$table->integer('clp_nivel')->comment('Nivel da conta');
			$table->string('clp_totsn', 1)->comment('Conta Totalizadora S ou N');
			$table->integer('clp_idpai')->nullable()->comment('Id da Conta Pai DFCL');
			$table->dateTime('clp_dtsis')->nullable()->default('now()')->comment('Dt e hr sistema');
			$table->integer('clp_ordem_ini')->default(0)->comment('Nro ordem inicial nivel 3');
			$table->integer('clp_ordem_fim')->default(0)->comment('Nro ordem nival nivel 3');
			$table->integer('clp_nivel_dfc')->nullable()->comment('Nivel da conta para DFC');
			$table->string('clp_dfc', 1)->nullable()->comment('Conta para DFC S ou N');
			$table->string('clp_dfcl', 1)->nullable()->comment('Conta para DFCL S ou N');
			$table->integer('clp_ordem_dfc')->nullable()->default(0)->comment('Ordem da conta para DFC');
			$table->integer('clp_idpai_dfc')->nullable()->comment('Id da conta pai DFC');
			$table->unique(['plp_id','clp_ordem'], 'uk_dcontapad_ordem');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dplanopadcta');
	}

}

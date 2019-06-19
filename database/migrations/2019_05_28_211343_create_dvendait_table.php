<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDvendaitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dvendait', function(Blueprint $table)
		{
			$table->integer('vei_id', true)->comment('Id do Item venda');
			$table->integer('ven_id')->nullable()->comment('Id da Venda');
			$table->integer('prd_id')->nullable()->comment('Id do Produto');
			$table->decimal('vei_qtde', 10, 0)->nullable()->default(0)->comment('Quantidade Vendida');
			$table->decimal('vei_unit', 10, 0)->nullable()->default(0)->comment('Valor Unitario');
			$table->decimal('vei_total', 10, 0)->nullable()->default(0)->comment('Valor Total');
			$table->decimal('vei_ipi', 10, 0)->nullable()->default(0)->comment('IPI');
			$table->decimal('vei_icms', 10, 0)->nullable()->default(0)->comment('ICMS');
			$table->decimal('vei_pis', 10, 0)->nullable()->default(0)->comment('PIS');
			$table->decimal('vei_cofins', 10, 0)->nullable()->default(0)->comment('COFINS');
			$table->decimal('vei_frete', 10, 0)->nullable()->default(0)->comment('Valor do Frete');
			$table->decimal('vei_margem', 10, 0)->nullable()->default(0)->comment('Margem de Contribuicao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dvendait');
	}

}

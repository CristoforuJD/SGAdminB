<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFbortituloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fbortitulo', function(Blueprint $table)
		{
			$table->integer('bti_id', true)->comment('Id do titulo');
			$table->integer('bor_id')->comment('Id do bordero');
			$table->decimal('bti_vlr_tarifa', 10, 0)->nullable()->default(0)->comment('Valor das tarifas do titulo');
			$table->decimal('bti_valor_tit', 10, 0)->default(0)->comment('Valor do titulo');
			$table->dateTime('gti_dtsis')->nullable()->default('now()')->comment('Data e hora de insercao');
			$table->date('bti_emissao')->comment('Data de emissao');
			$table->date('bti_vecto')->comment('Data de vencimento');
			$table->integer('cli_id')->nullable()->comment('Id do cliente');
			$table->date('bti_data_pagto')->nullable()->comment('Data de pagamento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fbortitulo');
	}

}

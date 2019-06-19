<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDtitrecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dtitrec', function(Blueprint $table)
		{
			$table->integer('tit_id', true)->comment('Id do Titulo');
			$table->integer('ven_id')->nullable()->comment('Id da Venda');
			$table->decimal('tit_valor', 10, 0)->default(0)->comment('Valor do Titulo');
			$table->integer('car_id')->nullable()->comment('Id da Carteira');
			$table->integer('bco_id')->nullable()->comment('Id do Banco');
			$table->date('tit_emissao')->nullable()->comment('Data de Emissao');
			$table->date('tit_vencimento')->nullable()->comment('Data de Vencimento');
			$table->decimal('tit_valor_pago', 10, 0)->nullable()->default(0)->comment('Valor Pago');
			$table->integer('pro_id')->nullable()->comment('Id do Projeto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dtitrec');
	}

}

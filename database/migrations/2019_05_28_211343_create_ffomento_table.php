<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFfomentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ffomento', function(Blueprint $table)
		{
			$table->integer('fom_id', true)->comment('Id do Fomento');
			$table->integer('pro_id')->nullable()->comment('Id do projeto');
			$table->integer('bco_id')->comment('Id do Banco');
			$table->string('fom_aditivo', 20)->comment('Nro Aditivo / Fomento');
			$table->string('fom_tipo_oper', 1)->comment('Tipo Antecipada ou Postecipada');
			$table->date('fom_data_aber')->comment('Data da Abertura');
			$table->date('fom_data_venc')->comment('Data de Vencimento');
			$table->date('fom_data_repro')->nullable()->comment('Data de reprogramacao');
			$table->string('fom_status', 1)->default('A')->comment('Status Aberta Encerrada');
			$table->decimal('fom_valor_cap', 10, 0)->default(0)->comment('Valor Captado');
			$table->decimal('fom_valor_lib', 10, 0)->default(0)->comment('Valor Liberado');
			$table->decimal('fom_taxa_acordado', 10, 0)->default(0)->comment('Taxa Acordado');
			$table->decimal('fom_taxa_efet', 10, 0)->default(0)->comment('Taxa Efetiva');
			$table->string('fom_bordero', 20)->nullable()->comment('Nro Bordero');
			$table->decimal('fom_saldo', 10, 0)->default(0)->comment('Saldo em aberto');
			$table->date('fom_data_liqui')->nullable()->comment('Data de Liquidacao');
			$table->integer('usu_id')->comment('Usuario de Criação');
			$table->dateTime('fom_dtsis')->nullable()->default('now()')->comment('Data e Hora sistema');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ffomento');
	}

}

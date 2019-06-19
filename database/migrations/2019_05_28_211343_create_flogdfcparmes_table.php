<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlogdfcparmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flogdfcparmes', function(Blueprint $table)
		{
			$table->integer('lpm_id', true);
			$table->integer('usu_id')->comment('Id do usuario');
			$table->string('lpm_valant_aberto', 1)->comment('Valor Anterior da coluna Aberto S/N');
			$table->string('lpm_justificativa', 50)->comment('Justificativa para a alteracao');
			$table->dateTime('lpm_data')->comment('Data e hr da modificacao');
			$table->integer('pdf_id')->comment('Id do parametroDFC');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flogdfcparmes');
	}

}

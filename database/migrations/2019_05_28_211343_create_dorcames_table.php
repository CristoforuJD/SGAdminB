<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDorcamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dorcames', function(Blueprint $table)
		{
			$table->integer('orc_id', true)->comment('Id do orcamento');
			$table->integer('pla_id')->comment('Id da Conta');
			$table->integer('sub_id')->comment('Id do Sub Projeto');
			$table->integer('pro_id')->nullable()->comment('Id do projeto');
			$table->integer('pla_ordem')->comment('Ordem Impressao');
			$table->decimal('orc_valor', 10, 0)->default(0)->comment('Valor do Orcamento');
			$table->integer('usu_id')->comment('Usuario Lancamento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dorcames');
	}

}

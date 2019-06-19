<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFimporcamiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fimporcami', function(Blueprint $table)
		{
			$table->integer('imoi_id', true)->comment('Id do item orcamento');
			$table->integer('imo_id')->comment('Id do Orcamento');
			$table->integer('imoi_ano')->comment('Ano');
			$table->integer('imoi_mes');
			$table->string('imoi_conta', 30)->comment('Conta');
			$table->decimal('imoi_valor', 10, 0)->default(0)->comment('Valor Orcado');
			$table->string('imoi_subpro', 60)->comment('Sub Projeto');
			$table->integer('pla_id')->nullable()->comment('Id da conta');
			$table->string('imoi_status', 100)->nullable()->comment('Status da importacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fimporcami');
	}

}

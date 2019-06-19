<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDplanodispTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dplanodisp', function(Blueprint $table)
		{
			$table->integer('dis_id', true)->comment('Id Plano disponivel');
			$table->integer('pro_id')->comment('Id do projeto (sem relacionamento');
			$table->integer('pla_id')->nullable()->comment('Id do Plano conta utilizado (quando vazio esse campo significa que a ordem esta disponivel)');
			$table->integer('pla_idpai')->comment('Id da conta pai');
			$table->integer('pla_ordem')->comment('Nro da ordem no plano de contas');
			$table->unique(['pro_id','pla_ordem'], 'uk_dplanodisp');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dplanodisp');
	}

}

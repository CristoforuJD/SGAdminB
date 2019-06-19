<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDdfcdiaEstTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ddfcdia_est', function(Blueprint $table)
		{
			$table->integer('dfd_id', true)->comment('Id do DFC Diario Estrategico');
			$table->integer('dfd_ano')->comment('Ano');
			$table->integer('dfd_mes')->comment('Mes');
			$table->integer('pro_id')->comment('Id do Projeto sem constraint');
			$table->integer('sub_id')->comment('Id do SubProjeto');
			$table->integer('pla_id')->comment('Id da conta');
			$table->integer('pla_ordem')->comment('Ordem Impressao');
			$table->decimal('dfd_dia1', 10, 0)->default(0)->comment('Valor Fluxo dia 01');
			$table->decimal('dfd_dia2', 10, 0)->default(0)->comment('Valor Fluxo dia 02');
			$table->decimal('dfd_dia3', 10, 0)->default(0)->comment('Valor Fluxo dia 03');
			$table->decimal('dfd_dia4', 10, 0)->default(0)->comment('Valor Fluxo dia 04');
			$table->decimal('dfd_dia5', 10, 0)->default(0)->comment('Valor Fluxo dia 05');
			$table->decimal('dfd_dia6', 10, 0)->default(0)->comment('Valor Fluxo dia 06');
			$table->decimal('dfd_dia7', 10, 0)->default(0)->comment('Valor Fluxo dia 07');
			$table->decimal('dfd_dia8', 10, 0)->default(0)->comment('Valor Fluxo dia 08');
			$table->decimal('dfd_dia9', 10, 0)->default(0)->comment('Valor Fluxo dia 09');
			$table->decimal('dfd_dia10', 10, 0)->default(0)->comment('Valor Fluxo dia 10');
			$table->decimal('dfd_dia11', 10, 0)->default(0)->comment('Valor Fluxo dia 11');
			$table->decimal('dfd_dia12', 10, 0)->default(0)->comment('Valor Fluxo dia 12');
			$table->decimal('dfd_dia13', 10, 0)->default(0)->comment('Valor Fluxo dia 13');
			$table->decimal('dfd_dia14', 10, 0)->default(0)->comment('Valor Fluxo dia 14');
			$table->decimal('dfd_dia15', 10, 0)->default(0)->comment('Valor Fluxo dia 15');
			$table->decimal('dfd_dia16', 10, 0)->default(0)->comment('Valor Fluxo dia 16');
			$table->decimal('dfd_dia17', 10, 0)->default(0)->comment('Valor Fluxo dia 17');
			$table->decimal('dfd_dia18', 10, 0)->default(0)->comment('Valor Fluxo dia 18');
			$table->decimal('dfd_dia19', 10, 0)->default(0)->comment('Valor Fluxo dia 19');
			$table->decimal('dfd_dia20', 10, 0)->default(0)->comment('Valor Fluxo dia 20');
			$table->decimal('dfd_dia21', 10, 0)->default(0)->comment('Valor Fluxo dia 21');
			$table->decimal('dfd_dia22', 10, 0)->default(0)->comment('Valor Fluxo dia 22');
			$table->decimal('dfd_dia23', 10, 0)->default(0)->comment('Valor Fluxo dia 23');
			$table->decimal('dfd_dia24', 10, 0)->default(0)->comment('Valor Fluxo dia 24');
			$table->decimal('dfd_dia25', 10, 0)->default(0)->comment('Valor Fluxo dia 25');
			$table->decimal('dfd_dia26', 10, 0)->default(0)->comment('Valor Fluxo dia 26');
			$table->decimal('dfd_dia27', 10, 0)->default(0)->comment('Valor Fluxo dia 27');
			$table->decimal('dfd_dia28', 10, 0)->default(0)->comment('Valor Fluxo dia 28');
			$table->decimal('dfd_dia29', 10, 0)->default(0)->comment('Valor Fluxo dia 29');
			$table->decimal('dfd_dia30', 10, 0)->default(0)->comment('Valor Fluxo dia 30');
			$table->decimal('dfd_dia31', 10, 0)->default(0)->comment('Valor Fluxo dia 31');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ddfcdia_est');
	}

}

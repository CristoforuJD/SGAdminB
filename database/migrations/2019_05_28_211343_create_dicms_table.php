<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDicmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dicms', function(Blueprint $table)
		{
			$table->integer('icm_ano')->comment('Ano da Tabela de ICMS');
			$table->integer('est_id_ori')->comment('Estado Origem');
			$table->integer('est_id_des')->comment('Estado Destino');
			$table->decimal('icm_aliquota', 10, 0)->nullable()->default(0)->comment('Aliquota do ICMS');
			$table->primary(['icm_ano','est_id_ori','est_id_des'], 'dicms_pk');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dicms');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDtarifaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dtarifa', function(Blueprint $table)
		{
			$table->integer('tar_id', true)->comment('Id sequencial');
			$table->string('tar_desc', 100)->comment('Descricao da tariga');
			$table->string('tar_operacao', 1)->default('N')->comment('Tarifa da operacao S ou N');
			$table->string('tar_titulo', 1)->default('N')->comment('Tarifa do Titulo S ou N');
			$table->string('tar_ativo', 1)->default('S')->comment('Tarifa Ativa S ou N');
			$table->dateTime('tar_dtsis')->nullable()->default('now()')->comment('Data e Hora insercao');
			$table->string('tar_advalorem', 1)->nullable()->default('N')->comment('Flag AdValore S ou N');
			$table->string('tar_desagio', 1)->nullable()->default('N')->comment('Flag Desagio S ou N');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dtarifa');
	}

}

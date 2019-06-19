<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDsegmentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dsegmento', function(Blueprint $table)
		{
			$table->integer('seg_id', true)->comment('Segmento Empresas');
			$table->string('seg_nome', 100)->comment('Nome do segmento');
			$table->string('seg_ativo', 1)->nullable()->default('S')->comment('Ativo S/N');
			$table->dateTime('seg_dtsis')->nullable()->default('now()')->comment('Dt e Hr sistema');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dsegmento');
	}

}

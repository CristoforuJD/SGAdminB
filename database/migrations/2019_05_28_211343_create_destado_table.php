<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDestadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destado', function(Blueprint $table)
		{
			$table->integer('est_id', true)->comment('Id do Estado');
			$table->integer('pai_id')->comment('Id do Pais');
			$table->string('est_uf', 5)->nullable()->comment('UF');
			$table->string('est_nome', 100)->comment('Nome do Estado');
			$table->integer('reg_id')->nullable()->comment('Id da Regiao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('destado');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDsubprojetoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dsubprojeto', function(Blueprint $table)
		{
			$table->integer('sub_id', true)->comment('Id do Sub-Projeto');
			$table->string('sub_nome', 100);
			$table->string('sub_depara', 60)->comment('Nome para De-Para');
			$table->string('sub_ativo', 1)->default('S');
			$table->string('sub_default', 1)->default('N')->comment('Sub projeto Default S ou N');
			$table->date('sub_data_enc')->comment('Data de Encerramento');
			$table->integer('pro_id')->comment('Id do Projeto');
			$table->unique(['pro_id','sub_nome'], 'uk_dsubprojeto1');
			$table->unique(['pro_id','sub_depara'], 'uk_dsubprojeto2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dsubprojeto');
	}

}

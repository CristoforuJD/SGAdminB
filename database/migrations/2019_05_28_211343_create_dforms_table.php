<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDformsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dforms', function(Blueprint $table)
		{
			$table->integer('for_id', true)->comment('Id do formulario');
			$table->string('for_nome', 100)->comment('Nome do formulario');
			$table->string('for_descricao', 500)->nullable()->comment('Descricao do form');
			$table->string('for_nomemenu', 100)->unique('dforms_for_nomemenu_key')->comment('Nome do formulario para menu');
			$table->string('for_caminho', 300)->nullable()->comment('Caminho do formulario');
			$table->string('for_ativo', 1)->default('S')->comment('Ativo S ou S');
			$table->dateTime('for_dtsis')->nullable()->default('now()')->comment('Data e hora de insercao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dforms');
	}

}

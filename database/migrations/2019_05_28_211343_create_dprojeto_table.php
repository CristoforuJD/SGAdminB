<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDprojetoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dprojeto', function(Blueprint $table)
		{
			$table->integer('pro_id', true)->comment('Id do projeto');
			$table->string('pro_nome', 300)->comment('Nome do Projeto');
			$table->string('pro_ativo', 1)->default('A')->comment('Ativo S ou N');
			$table->text('pro_logo')->nullable()->comment('Logo do projeto');
			$table->string('pro_endereco', 300)->nullable()->comment('Endereco ');
			$table->string('pro_cidade', 100)->nullable()->comment('Cidade do projeto');
			$table->string('pro_uf', 2)->nullable()->comment('Estado do Projeto');
			$table->integer('usu_coord')->nullable()->comment('Coordenador');
			$table->integer('usu_gestor')->nullable()->comment('Gestor');
			$table->dateTime('pro_dtsis')->nullable()->comment('Data e hora de inserção');
			$table->integer('seg_id')->comment('Segmento da Empresa');
			$table->date('pro_data_ence')->comment('Data de Encerramento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dprojeto');
	}

}

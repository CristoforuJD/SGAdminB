<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDusuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dusuario', function(Blueprint $table)
		{
			$table->integer('usu_id', true)->comment('Id do Usuario');
			$table->integer('pro_default')->nullable()->comment('Id do projeto default do usuario');
			$table->string('usu_nome_completo', 100)->comment('Nome Completo');
			$table->string('usu_telefone', 100)->nullable()->comment('Telefone');
			$table->string('usu_endereco', 100)->nullable()->comment('Endereco');
			$table->string('usu_cidade', 100)->nullable()->comment('Cidade');
			$table->string('usu_uf', 2)->nullable()->comment('UF');
			$table->string('usu_email')->nullable()->comment('Email');
			$table->string('usu_senha', 20)->comment('Senha');
			$table->string('usu_usuario', 30)->unique('dusuario_usu_usuario_key')->comment('Usuario de login');
			$table->string('usu_ativo', 1)->default('S')->comment('Ativo S ou N');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dusuario');
	}

}

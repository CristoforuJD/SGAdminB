<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDfuncTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dfunc', function(Blueprint $table)
		{
			$table->integer('fun_id', true)->comment('Id do funcionario');
			$table->string('fun_nome', 100)->nullable()->comment('Nome do funcionario');
			$table->string('fun_endereco', 100)->nullable()->comment('Endereco');
			$table->string('fun_cep', 10)->nullable()->comment('CEP do funcionario');
			$table->string('fun_cidade', 50)->nullable()->comment('Cidade');
			$table->string('fun_uf', 2)->nullable()->comment('Estado do funcionario');
			$table->integer('fun_id_respo')->nullable()->comment('Responsavel direto');
			$table->string('fun_placa_carro', 20)->nullable()->comment('Placa do carro');
			$table->string('fun_cpfcnpj', 20)->nullable()->comment('CPF / CNPJ do Funcionario');
			$table->string('fun_razao', 100)->nullable()->comment('Razao social da empresa do funcionario');
			$table->string('fun_insc', 30)->nullable()->comment('Inscricao Estadual');
			$table->string('fun_end_emp', 100)->nullable()->comment('Endereco da empresa');
			$table->string('fun_cep_emp', 10)->nullable()->comment('CEP da Empresa');
			$table->string('fun_cidade_emp', 50)->nullable()->comment('Cidade emp');
			$table->string('fun_uf_emp', 2)->nullable()->comment('Estado empresa do funcionario');
			$table->string('fun_ativo', 1)->nullable()->default('S')->comment('Ativo S ou N');
			$table->string('fun_email', 50)->nullable()->comment('Email do funcionario');
			$table->dateTime('fun_dtsis')->nullable()->default('now()')->comment('Data e hora sistema insercao');
			$table->string('fun_email_part', 50)->nullable()->comment('Email particular');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dfunc');
	}

}

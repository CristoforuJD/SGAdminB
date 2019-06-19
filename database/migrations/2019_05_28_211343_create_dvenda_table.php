<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDvendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dvenda', function(Blueprint $table)
		{
			$table->integer('ven_id', true)->comment('Id da venda');
			$table->integer('cli_id')->comment('Id do Cliente');
			$table->date('ven_data')->comment('Data Emissao');
			$table->integer('ven_nf')->nullable()->comment('Numero da Nota Fiscal');
			$table->string('ven_serie', 5)->nullable()->comment('Serie da NF');
			$table->integer('rep_id')->nullable()->comment('Id do Representante');
			$table->integer('pro_id')->nullable()->comment('Id do Projeto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dvenda');
	}

}

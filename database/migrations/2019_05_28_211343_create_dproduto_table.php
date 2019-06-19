<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDprodutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dproduto', function(Blueprint $table)
		{
			$table->integer('prd_id', true)->comment('Id do Produto');
			$table->string('prd_nome', 200)->comment('Nome do Produto');
			$table->integer('cas_id')->nullable();
			$table->integer('cap_id')->nullable();
			$table->string('prd_unime', 5)->nullable()->comment('Unidade de Medida');
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
		Schema::drop('dproduto');
	}

}

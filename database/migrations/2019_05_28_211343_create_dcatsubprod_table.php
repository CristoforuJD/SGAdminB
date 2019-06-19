<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDcatsubprodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dcatsubprod', function(Blueprint $table)
		{
			$table->integer('cas_id', true)->comment('Id da sub categoria de produtos');
			$table->string('cas_nome', 100)->comment('Nome da Sub Categoria de Produtos');
			$table->integer('cap_id')->comment('Id da Categoria de Produtos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dcatsubprod');
	}

}

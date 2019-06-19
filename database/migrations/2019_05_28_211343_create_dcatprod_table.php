<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDcatprodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dcatprod', function(Blueprint $table)
		{
			$table->integer('cap_id', true)->comment('Id da categoria de produtos');
			$table->string('cap_nome', 100)->comment('Nome da Categoria de produtos');
			$table->integer('pro_id')->comment('Id do Projeto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dcatprod');
	}

}

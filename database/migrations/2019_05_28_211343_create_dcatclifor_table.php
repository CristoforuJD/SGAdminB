<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDcatcliforTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dcatclifor', function(Blueprint $table)
		{
			$table->integer('cac_id', true)->comment('Id da categoria Cliente / Fonrecedor');
			$table->string('cac_nome', 100)->nullable()->comment('Nome da Categoria Cliente / Fornecedor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dcatclifor');
	}

}

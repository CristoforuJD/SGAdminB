<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDcidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dcidade', function(Blueprint $table)
		{
			$table->integer('cid_id', true)->comment('Id da Cidade');
			$table->integer('est_id')->nullable()->comment('Id do Estado');
			$table->string('cid_name', 100)->nullable()->comment('Nome da cidade');
			$table->integer('cid_ibge')->nullable()->comment('Codigo IBGE');
			$table->string('cid_cep', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dcidade');
	}

}

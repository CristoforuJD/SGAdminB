<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDtiporecebivelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dtiporecebivel', function(Blueprint $table)
		{
			$table->integer('tir_id', true)->comment('Id do tipo de recebivel');
			$table->string('tir_nome', 100)->comment('Nome do tipo de recebivel');
			$table->string('tir_ativo', 1)->default('S')->comment('Ativo S ou N');
			$table->dateTime('tir_dtsis')->nullable()->default('now()')->comment('Data e hora do sistema');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dtiporecebivel');
	}

}

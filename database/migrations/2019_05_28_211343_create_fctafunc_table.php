<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFctafuncTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fctafunc', function(Blueprint $table)
		{
			$table->integer('ctf_id', true)->comment('Id da conta');
			$table->integer('fun_id')->nullable()->comment('Id do funcionario');
			$table->integer('bco_id')->nullable()->comment('Id do banco');
			$table->string('ctf_agencia', 10)->nullable()->comment('Nro da agencia');
			$table->string('ctf_conta', 15)->nullable()->comment('Numero da conta');
			$table->string('ctf_variacao', 10)->nullable()->comment('Variacao');
			$table->string('ctf_obs', 50)->nullable()->comment('Observação');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fctafunc');
	}

}

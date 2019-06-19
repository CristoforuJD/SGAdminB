<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbancoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dbanco', function(Blueprint $table)
		{
			$table->integer('bco_id', true)->comment('Id do Banco');
			$table->integer('bco_codigo')->comment('codigo do banco');
			$table->string('bco_nome', 100)->comment('Nome do banco');
			$table->string('bco_ativo', 1)->default('S')->comment('Ativo S ou N');
			$table->dateTime('bco_dtsis')->nullable()->default('now()')->comment('Data e hora de inserção');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbanco');
	}

}

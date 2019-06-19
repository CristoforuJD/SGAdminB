<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrdvdespTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drdvdesp', function(Blueprint $table)
		{
			$table->integer('rdd_id', true)->comment('Id sequencial');
			$table->string('rdd_nome', 50)->nullable()->comment('Nome da despesa');
			$table->integer('rdd_tipo')->nullable()->comment('Tipo da despesa (1) = Despesa Pessoal, (2) = Despesas com veiculos, (3) = Outras despesas');
			$table->string('rdd_ativo', 1)->nullable()->comment('Ativo S ou N');
			$table->dateTime('rdd_dtsis')->nullable()->default('now()')->comment('DAta e hora do sistema');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drdvdesp');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDestoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('destoque', function(Blueprint $table)
		{
			$table->integer('est_id', true)->comment('Id sequencial');
			$table->string('est_cod', 50)->nullable()->comment('Codigo do produto');
			$table->string('est_nome', 200)->nullable()->comment('Nome do produto');
			$table->integer('pro_id')->nullable()->comment('Id do projeto');
			$table->string('est_unime', 5)->nullable()->comment('Unidade de medida');
			$table->string('est_acabado', 1)->nullable()->default('N')->comment('Produto acabado Sim ou Nao');
			$table->decimal('est_saldo', 10, 0)->nullable()->default(0);
			$table->date('est_data_saldo')->nullable()->comment('Data do levantamento de saldo');
			$table->dateTime('est_dtsis')->nullable()->comment('Data e hora da importacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('destoque');
	}

}

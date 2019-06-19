<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFfommovTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ffommov', function(Blueprint $table)
		{
			$table->integer('foi_id', true)->comment('Id do Movimento Fomento');
			$table->integer('usu_id')->comment('Usuario da Movimentacao');
			$table->decimal('foi_valor_movimento', 10, 0)->default(0)->comment('Valor Total do Movimento');
			$table->decimal('foi_valor_juros', 10, 0)->default(0)->comment('Valor Juros');
			$table->integer('for_valor_abatido')->default(0)->comment('Valor Abatido do Principal');
			$table->date('foi_data')->comment('Data da Movimentacao');
			$table->integer('fom_id')->comment('Id do Fomento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ffommov');
	}

}

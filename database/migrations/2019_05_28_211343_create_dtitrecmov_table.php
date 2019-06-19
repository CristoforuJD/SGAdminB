<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDtitrecmovTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dtitrecmov', function(Blueprint $table)
		{
			$table->integer('tim_id', true)->comment('Id da movimentacao');
			$table->integer('tit_id')->nullable()->comment('Id do Titulo');
			$table->decimal('tim_valor', 10, 0)->nullable()->default(0)->comment('Valor da Movimentacao');
			$table->decimal('tim_data', 10, 0)->nullable()->default(0)->comment('Data da Movimentacao');
			$table->string('tim_obs', 200)->nullable()->comment('Observacao da movimentacao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dtitrecmov');
	}

}

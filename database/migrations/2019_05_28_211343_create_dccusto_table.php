<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDccustoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dccusto', function(Blueprint $table)
		{
			$table->integer('cus_id', true)->comment('Id do centro de custo');
			$table->integer('fun_id')->nullable()->comment('Responsavel pelo CC');
			$table->string('cus_ativo', 1)->nullable()->default('S')->comment('Ativo S ou N');
			$table->dateTime('cus_dtsis')->nullable()->default('now()')->comment('Data e hora do sistema');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dccusto');
	}

}

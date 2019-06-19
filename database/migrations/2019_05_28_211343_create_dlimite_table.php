<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDlimiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dlimite', function(Blueprint $table)
		{
			$table->integer('lim_id', true)->comment('Id sequencial');
			$table->integer('car_id')->comment('Id da carteira');
			$table->integer('bco_id')->nullable()->comment('Id do banco');
			$table->integer('pro_id')->nullable()->comment('Id do projeto');
			$table->decimal('lim_valor', 10, 0)->default(0);
			$table->decimal('lim_utilizado', 10, 0)->default(0)->comment('Valor utilizado');
			$table->dateTime('lim_dtsis')->nullable()->default('now()')->comment('Data e hora da inserção');
			$table->unique(['car_id','bco_id','pro_id'], 'uk_dlimite');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dlimite');
	}

}

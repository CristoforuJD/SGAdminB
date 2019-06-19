<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrdvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frdv', function(Blueprint $table)
		{
			$table->integer('rdv_id', true)->comment('Id sequencial');
			$table->integer('cus_id')->nullable()->comment('Id do centro de custo');
			$table->smallInteger('rdv_data')->nullable()->comment('DAta da rdv');
			$table->integer('fun_id')->nullable()->comment('Id do funcionario');
			$table->integer('fun_aprov')->nullable()->comment('Id funcionario aprovacao');
			$table->dateTime('rdv_dtaprov')->nullable()->comment('Datta e hora aprovacao');
			$table->dateTime('rdv_dtsis')->nullable()->default('now()')->comment('Data e hora do sistema');
			$table->decimal('rdv_vlr_total', 10, 0)->nullable()->default(0)->comment('Valor total de todos os itens');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frdv');
	}

}

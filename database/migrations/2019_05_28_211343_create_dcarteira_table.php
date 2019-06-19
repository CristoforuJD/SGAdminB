<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDcarteiraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dcarteira', function(Blueprint $table)
		{
			$table->integer('car_id', true)->comment('Id da carteira');
			$table->string('car_nome', 100)->comment('Nome da Carteira');
			$table->string('car_ativo', 1)->default('A')->comment('Ativo S ou N');
			$table->dateTime('car_dtsis')->nullable()->default('now()');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dcarteira');
	}

}

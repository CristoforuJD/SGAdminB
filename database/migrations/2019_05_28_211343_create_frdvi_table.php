<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrdviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frdvi', function(Blueprint $table)
		{
			$table->integer('rdi_id', true)->comment('Id sequencial');
			$table->integer('rdv_id')->nullable()->comment('Id da rdv');
			$table->integer('rdd_id')->nullable()->comment('Id do tipo de despesa');
			$table->date('rdi_data')->nullable()->comment('Data da despesa');
			$table->string('rdi_cidade', 50)->nullable()->comment('Cidade da despesa');
			$table->string('rdi_uf', 2)->nullable()->comment('UF da despesa');
			$table->decimal('rdi_valor', 10, 0)->nullable()->default(0)->comment('Valor da despesa');
			$table->dateTime('rdi_dtsis')->nullable()->default('now()')->comment('Data e hora de insercao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frdvi');
	}

}

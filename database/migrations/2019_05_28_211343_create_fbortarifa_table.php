<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFbortarifaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fbortarifa', function(Blueprint $table)
		{
			$table->integer('tab_id', true)->comment('Id sequencial');
			$table->integer('bor_id')->comment('Id do bordero');
			$table->integer('tar_id')->comment('Id da tarifa');
			$table->decimal('tab_valor', 10, 0)->default(0)->comment('Valor');
			$table->decimal('tab_perc', 10, 0)->nullable()->default(0)->comment('Percentual');
			$table->dateTime('tab_dtsis')->nullable()->default('now()')->comment('DAta e hora inserção');
			$table->unique(['bor_id','tar_id'], 'ix_fbortarifa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fbortarifa');
	}

}

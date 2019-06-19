<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDplanopadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dplanopad', function(Blueprint $table)
		{
			$table->integer('plp_id', true);
			$table->string('plp_nome', 50);
			$table->string('plp_ativo', 1)->default('S')->comment('Ativo Sim ou Nao');
			$table->integer('seg_id')->comment('Segmento da empresa');
			$table->dateTime('plp_dtsis')->nullable()->default('now()')->comment('Dt e Hr sistema');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dplanopad');
	}

}

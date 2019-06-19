<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDplanodispTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dplanodisp', function(Blueprint $table)
		{
			$table->foreign('pla_id', 'fk_dpladisponivel_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dplanodisp', function(Blueprint $table)
		{
			$table->dropForeign('fk_dpladisponivel_dplanoconta');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDplanocontaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dplanoconta', function(Blueprint $table)
		{
			$table->foreign('clp_id', 'fk_dplanoconta_dcontapd')->references('clp_id')->on('dplanopadcta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pla_idpai', 'fk_dplanoconta_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pro_id', 'fk_dplanoconta_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dplanoconta', function(Blueprint $table)
		{
			$table->dropForeign('fk_dplanoconta_dcontapd');
			$table->dropForeign('fk_dplanoconta_dplanoconta');
			$table->dropForeign('fk_dplanoconta_dprojeto');
		});
	}

}

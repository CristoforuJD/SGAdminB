<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDplanodeparaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dplanodepara', function(Blueprint $table)
		{
			$table->foreign('pla_id', 'fk_dplanodepara_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('pro_id', 'fk_dplanodepara_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('usu_id', 'fk_dplanodepara_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dplanodepara', function(Blueprint $table)
		{
			$table->dropForeign('fk_dplanodepara_dplanoconta');
			$table->dropForeign('fk_dplanodepara_dprojeto');
			$table->dropForeign('fk_dplanodepara_dusuario');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDprojetoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dprojeto', function(Blueprint $table)
		{
			$table->foreign('seg_id', 'fk_dprojeto_dsegmento')->references('seg_id')->on('dsegmento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usu_coord', 'fk_dprojeto_dusuario1')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usu_gestor', 'fk_dprojeto_dusuario2')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dprojeto', function(Blueprint $table)
		{
			$table->dropForeign('fk_dprojeto_dsegmento');
			$table->dropForeign('fk_dprojeto_dusuario1');
			$table->dropForeign('fk_dprojeto_dusuario2');
		});
	}

}

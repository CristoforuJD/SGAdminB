<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFimpdfcMsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fimpdfc_ms', function(Blueprint $table)
		{
			$table->foreign('pro_id', 'fk_fimpdfcms_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usu_id', 'fk_fimpdfcms_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fimpdfc_ms', function(Blueprint $table)
		{
			$table->dropForeign('fk_fimpdfcms_dprojeto');
			$table->dropForeign('fk_fimpdfcms_dusuario');
		});
	}

}

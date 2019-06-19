<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFdfcparmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fdfcparmes', function(Blueprint $table)
		{
			$table->foreign('pro_id', 'fk_fdfcparmes_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('usu_id', 'fk_fdfcparmes_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fdfcparmes', function(Blueprint $table)
		{
			$table->dropForeign('fk_fdfcparmes_dprojeto');
			$table->dropForeign('fk_fdfcparmes_dusuario');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDprousuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dprousu', function(Blueprint $table)
		{
			$table->foreign('pro_id', 'fk_dprousu_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('usu_id', 'fk_dprousu_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dprousu', function(Blueprint $table)
		{
			$table->dropForeign('fk_dprousu_dprojeto');
			$table->dropForeign('fk_dprousu_dusuario');
		});
	}

}

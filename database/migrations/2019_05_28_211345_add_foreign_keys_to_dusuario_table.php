<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDusuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dusuario', function(Blueprint $table)
		{
			$table->foreign('pro_default', 'fk_dusuario_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dusuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_dusuario_dprojeto');
		});
	}

}

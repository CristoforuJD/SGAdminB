<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDsubprojetoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dsubprojeto', function(Blueprint $table)
		{
			$table->foreign('pro_id', 'fk_dsubprojeto_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dsubprojeto', function(Blueprint $table)
		{
			$table->dropForeign('fk_dsubprojeto_dprojeto');
		});
	}

}

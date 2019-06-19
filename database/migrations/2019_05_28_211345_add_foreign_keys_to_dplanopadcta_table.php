<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDplanopadctaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dplanopadcta', function(Blueprint $table)
		{
			$table->foreign('clp_idpai', 'fk_dcontapd_dcontapad')->references('clp_id')->on('dplanopadcta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('plp_id', 'fk_dcontapd_dplanopad')->references('plp_id')->on('dplanopad')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dplanopadcta', function(Blueprint $table)
		{
			$table->dropForeign('fk_dcontapd_dcontapad');
			$table->dropForeign('fk_dcontapd_dplanopad');
		});
	}

}

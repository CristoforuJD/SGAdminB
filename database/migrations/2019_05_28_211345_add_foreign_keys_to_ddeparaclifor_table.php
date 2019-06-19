<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDdeparacliforTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ddeparaclifor', function(Blueprint $table)
		{
			$table->foreign('cli_id', 'fk_ddeparaclifor_dclifor')->references('cli_id')->on('dclifor')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('pro_id', 'fk_ddeparaclifor_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ddeparaclifor', function(Blueprint $table)
		{
			$table->dropForeign('fk_ddeparaclifor_dclifor');
			$table->dropForeign('fk_ddeparaclifor_dprojeto');
		});
	}

}

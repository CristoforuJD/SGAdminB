<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFborderoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fbordero', function(Blueprint $table)
		{
			$table->foreign('bco_id', 'fk_fbordero_dbanco')->references('bco_id')->on('dbanco')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('car_id', 'fk_fbordero_dcarteira')->references('car_id')->on('dcarteira')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pro_id', 'fk_fbordero_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tir_id', 'fk_fbordero_dtiporecebivel')->references('tir_id')->on('dtiporecebivel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('url_id', 'fk_fbordero_durecliq')->references('url_id')->on('durecliq')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fbordero', function(Blueprint $table)
		{
			$table->dropForeign('fk_fbordero_dbanco');
			$table->dropForeign('fk_fbordero_dcarteira');
			$table->dropForeign('fk_fbordero_dprojeto');
			$table->dropForeign('fk_fbordero_dtiporecebivel');
			$table->dropForeign('fk_fbordero_durecliq');
		});
	}

}

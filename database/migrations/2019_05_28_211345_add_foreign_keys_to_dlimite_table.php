<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDlimiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dlimite', function(Blueprint $table)
		{
			$table->foreign('car_id', 'fk_dlimite_dcarteira')->references('car_id')->on('dcarteira')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('pro_id', 'fk_dlimite_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('bco_id', 'fk_dmilite_dbanco')->references('bco_id')->on('dbanco')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dlimite', function(Blueprint $table)
		{
			$table->dropForeign('fk_dlimite_dcarteira');
			$table->dropForeign('fk_dlimite_dprojeto');
			$table->dropForeign('fk_dmilite_dbanco');
		});
	}

}

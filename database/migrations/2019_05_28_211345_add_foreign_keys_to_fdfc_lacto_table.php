<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFdfcLactoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fdfc_lacto', function(Blueprint $table)
		{
			$table->foreign('cli_id', 'fk_fdfclcto_dclifor')->references('cli_id')->on('dclifor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pla_id', 'fk_fdfclcto_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('sub_id', 'fk_fdfclcto_dsubprojeto')->references('sub_id')->on('dsubprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usu_id', 'fk_fdfclcto_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('imi_id', 'fk_fdfclcto_fimpdfcdt')->references('imi_id')->on('fimpdfc_dt')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fdfc_lacto', function(Blueprint $table)
		{
			$table->dropForeign('fk_fdfclcto_dclifor');
			$table->dropForeign('fk_fdfclcto_dplanoconta');
			$table->dropForeign('fk_fdfclcto_dsubprojeto');
			$table->dropForeign('fk_fdfclcto_dusuario');
			$table->dropForeign('fk_fdfclcto_fimpdfcdt');
		});
	}

}

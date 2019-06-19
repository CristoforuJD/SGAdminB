<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFlogimpdfcmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('flogimpdfcms', function(Blueprint $table)
		{
			$table->foreign('usu_id', 'fk_flogimpdfcms_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ims_id', 'fk_flogimpdfcms_fimpdfcms')->references('ims_id')->on('fimpdfc_ms')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('flogimpdfcms', function(Blueprint $table)
		{
			$table->dropForeign('fk_flogimpdfcms_dusuario');
			$table->dropForeign('fk_flogimpdfcms_fimpdfcms');
		});
	}

}

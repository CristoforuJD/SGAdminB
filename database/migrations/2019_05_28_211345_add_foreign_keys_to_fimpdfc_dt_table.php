<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFimpdfcDtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fimpdfc_dt', function(Blueprint $table)
		{
			$table->foreign('pla_id', 'fk_fimpdfcdt_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ims_id', 'fk_fimpdfcdt_fimpdfcms')->references('ims_id')->on('fimpdfc_ms')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fimpdfc_dt', function(Blueprint $table)
		{
			$table->dropForeign('fk_fimpdfcdt_dplanoconta');
			$table->dropForeign('fk_fimpdfcdt_fimpdfcms');
		});
	}

}

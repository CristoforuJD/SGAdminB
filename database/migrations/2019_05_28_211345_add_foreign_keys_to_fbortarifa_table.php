<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFbortarifaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fbortarifa', function(Blueprint $table)
		{
			$table->foreign('tar_id', 'fk_ftarbor_dtarifa')->references('tar_id')->on('dtarifa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('bor_id', 'fk_ftarbor_fbordero')->references('bor_id')->on('fbordero')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fbortarifa', function(Blueprint $table)
		{
			$table->dropForeign('fk_ftarbor_dtarifa');
			$table->dropForeign('fk_ftarbor_fbordero');
		});
	}

}

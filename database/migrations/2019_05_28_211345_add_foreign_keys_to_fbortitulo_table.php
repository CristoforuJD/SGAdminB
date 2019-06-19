<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFbortituloTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fbortitulo', function(Blueprint $table)
		{
			$table->foreign('bor_id', 'fk_ftitbordero_fbordero')->references('bor_id')->on('fbordero')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('cli_id', 'fk_titbor_dcliente')->references('cli_id')->on('dclifor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fbortitulo', function(Blueprint $table)
		{
			$table->dropForeign('fk_ftitbordero_fbordero');
			$table->dropForeign('fk_titbor_dcliente');
		});
	}

}

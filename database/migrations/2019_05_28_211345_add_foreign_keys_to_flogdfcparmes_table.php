<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFlogdfcparmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('flogdfcparmes', function(Blueprint $table)
		{
			$table->foreign('pdf_id', 'fk_flogdfcparmes_fdfcparmes')->references('pdf_id')->on('fdfcparmes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('flogdfcparmes', function(Blueprint $table)
		{
			$table->dropForeign('fk_flogdfcparmes_fdfcparmes');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDccustoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dccusto', function(Blueprint $table)
		{
			$table->foreign('fun_id', 'fk_dccusto_dfunc')->references('fun_id')->on('dfunc')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dccusto', function(Blueprint $table)
		{
			$table->dropForeign('fk_dccusto_dfunc');
		});
	}

}

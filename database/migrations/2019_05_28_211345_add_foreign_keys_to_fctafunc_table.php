<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFctafuncTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fctafunc', function(Blueprint $table)
		{
			$table->foreign('bco_id', 'fk_fctafunc_dbanco')->references('bco_id')->on('dbanco')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fun_id', 'fk_fctafunc_dfunc')->references('fun_id')->on('dfunc')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fctafunc', function(Blueprint $table)
		{
			$table->dropForeign('fk_fctafunc_dbanco');
			$table->dropForeign('fk_fctafunc_dfunc');
		});
	}

}

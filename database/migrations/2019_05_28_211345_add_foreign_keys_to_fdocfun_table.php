<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFdocfunTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fdocfun', function(Blueprint $table)
		{
			$table->foreign('fun_id', 'fk_fdocfunc_dfunc')->references('fun_id')->on('dfunc')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fdocfun', function(Blueprint $table)
		{
			$table->dropForeign('fk_fdocfunc_dfunc');
		});
	}

}

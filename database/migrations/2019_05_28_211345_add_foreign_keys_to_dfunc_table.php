<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDfuncTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dfunc', function(Blueprint $table)
		{
			$table->foreign('fun_id_respo', 'fk_dfunc_dfunc')->references('fun_id')->on('dfunc')->onUpdate('RESTRICT')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dfunc', function(Blueprint $table)
		{
			$table->dropForeign('fk_dfunc_dfunc');
		});
	}

}

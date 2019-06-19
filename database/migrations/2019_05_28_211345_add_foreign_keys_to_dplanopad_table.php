<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDplanopadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dplanopad', function(Blueprint $table)
		{
			$table->foreign('seg_id', 'fk_dplanopad_dsegmento')->references('seg_id')->on('dsegmento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dplanopad', function(Blueprint $table)
		{
			$table->dropForeign('fk_dplanopad_dsegmento');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFfommovTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ffommov', function(Blueprint $table)
		{
			$table->foreign('usu_id', 'fk_ffommov_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fom_id', 'fk_ffommov_ffomento')->references('fom_id')->on('ffomento')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ffommov', function(Blueprint $table)
		{
			$table->dropForeign('fk_ffommov_dusuario');
			$table->dropForeign('fk_ffommov_ffomento');
		});
	}

}

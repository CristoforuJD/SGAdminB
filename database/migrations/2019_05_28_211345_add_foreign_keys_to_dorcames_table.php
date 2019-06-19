<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDorcamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dorcames', function(Blueprint $table)
		{
			$table->foreign('sub_id', 'fk_dorcames_dsubprojeto')->references('sub_id')->on('dsubprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pla_id', 'fk_dorcames_planoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dorcames', function(Blueprint $table)
		{
			$table->dropForeign('fk_dorcames_dsubprojeto');
			$table->dropForeign('fk_dorcames_planoconta');
		});
	}

}

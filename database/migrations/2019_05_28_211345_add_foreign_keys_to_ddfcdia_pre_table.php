<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDdfcdiaPreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ddfcdia_pre', function(Blueprint $table)
		{
			$table->foreign('pla_id', 'fk_ddfcdiapre_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('sub_id', 'fk_ddfcdiapre_dsubprojeto')->references('sub_id')->on('dsubprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ddfcdia_pre', function(Blueprint $table)
		{
			$table->dropForeign('fk_ddfcdiapre_dplanoconta');
			$table->dropForeign('fk_ddfcdiapre_dsubprojeto');
		});
	}

}

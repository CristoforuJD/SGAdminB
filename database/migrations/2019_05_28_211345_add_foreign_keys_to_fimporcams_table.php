<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFimporcamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fimporcams', function(Blueprint $table)
		{
			$table->foreign('pro_id', 'fk_fimporcamento_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fimporcams', function(Blueprint $table)
		{
			$table->dropForeign('fk_fimporcamento_dprojeto');
		});
	}

}

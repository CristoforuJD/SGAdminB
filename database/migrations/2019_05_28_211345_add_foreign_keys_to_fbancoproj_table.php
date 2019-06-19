<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFbancoprojTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fbancoproj', function(Blueprint $table)
		{
			$table->foreign('bco_id', 'fbancoproj_dbanco')->references('bco_id')->on('dbanco')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('pro_id', 'fbancoproj_dprojeto')->references('pro_id')->on('dprojeto')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fbancoproj', function(Blueprint $table)
		{
			$table->dropForeign('fbancoproj_dbanco');
			$table->dropForeign('fbancoproj_dprojeto');
		});
	}

}

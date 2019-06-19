<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFrdvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('frdv', function(Blueprint $table)
		{
			$table->foreign('cus_id', 'fk_frdv_dccusto')->references('cus_id')->on('dccusto')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fun_id', 'fk_frdv_dfunc')->references('fun_id')->on('dfunc')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fun_aprov', 'fk_frdv_dfunc_aprov')->references('fun_id')->on('dfunc')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('frdv', function(Blueprint $table)
		{
			$table->dropForeign('fk_frdv_dccusto');
			$table->dropForeign('fk_frdv_dfunc');
			$table->dropForeign('fk_frdv_dfunc_aprov');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFrdviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('frdvi', function(Blueprint $table)
		{
			$table->foreign('rdd_id', 'fk_frdvi_drdvdesp')->references('rdd_id')->on('drdvdesp')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('rdv_id', 'fk_frdvi_frdv')->references('rdv_id')->on('frdv')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('frdvi', function(Blueprint $table)
		{
			$table->dropForeign('fk_frdvi_drdvdesp');
			$table->dropForeign('fk_frdvi_frdv');
		});
	}

}

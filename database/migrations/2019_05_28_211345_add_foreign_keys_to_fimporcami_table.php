<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFimporcamiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fimporcami', function(Blueprint $table)
		{
			$table->foreign('pla_id', 'fk_fimporcami_dplanoconta')->references('pla_id')->on('dplanoconta')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('imo_id', 'fk_fimporcami_fimporcams')->references('imo_id')->on('fimporcams')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fimporcami', function(Blueprint $table)
		{
			$table->dropForeign('fk_fimporcami_dplanoconta');
			$table->dropForeign('fk_fimporcami_fimporcams');
		});
	}

}

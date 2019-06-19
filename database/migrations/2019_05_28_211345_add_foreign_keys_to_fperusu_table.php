<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFperusuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fperusu', function(Blueprint $table)
		{
			$table->foreign('per_id', 'fk_fperusu_dperfil')->references('per_id')->on('dperfil')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('usu_id', 'fk_fperusu_dusuario')->references('usu_id')->on('dusuario')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fperusu', function(Blueprint $table)
		{
			$table->dropForeign('fk_fperusu_dperfil');
			$table->dropForeign('fk_fperusu_dusuario');
		});
	}

}

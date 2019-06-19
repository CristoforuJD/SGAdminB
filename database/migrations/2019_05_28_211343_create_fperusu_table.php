<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFperusuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fperusu', function(Blueprint $table)
		{
			$table->integer('pfu_id', true)->comment('Id sequencial');
			$table->integer('per_id')->comment('Id do perfil');
			$table->integer('usu_id')->comment('Id do usuario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fperusu');
	}

}

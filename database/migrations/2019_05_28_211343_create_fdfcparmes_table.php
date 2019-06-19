<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFdfcparmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fdfcparmes', function(Blueprint $table)
		{
			$table->integer('pdf_id', true);
			$table->integer('pro_id');
			$table->integer('pdf_ano');
			$table->integer('pdf_mes');
			$table->string('pdf_aberto', 1)->nullable()->default('S');
			$table->integer('usu_id')->comment('Usuario Ultima Aleracao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fdfcparmes');
	}

}

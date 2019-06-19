<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDversaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dversao', function(Blueprint $table)
		{
			$table->integer('ver_id', true)->comment('Id da versao');
			$table->string('ver_versao', 10)->nullable()->comment('Nro da versao');
			$table->dateTime('ver_dtsis')->nullable()->comment('Data e hora inserção');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dversao');
	}

}

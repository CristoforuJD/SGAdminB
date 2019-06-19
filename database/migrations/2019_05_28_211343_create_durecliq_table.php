<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDurecliqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('durecliq', function(Blueprint $table)
		{
			$table->integer('url_id', true)->comment('Id sequencial');
			$table->string('url_nome', 100)->comment('Nome da utilizacao de recurso liquido');
			$table->string('url_ativo', 1)->default('S')->comment('Ativo S ou N');
			$table->dateTime('url_dtsis')->nullable()->default('now()');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('durecliq');
	}

}

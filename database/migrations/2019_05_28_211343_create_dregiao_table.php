<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDregiaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dregiao', function(Blueprint $table)
		{
			$table->integer('reg_id', true);
			$table->string('reg_nome', 100)->nullable()->comment('Nome da Regiao');
			$table->integer('pai_id')->nullable()->comment('Id do Pais');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dregiao');
	}

}

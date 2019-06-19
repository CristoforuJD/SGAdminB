<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrepreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drepre', function(Blueprint $table)
		{
			$table->integer('rep_id', true)->comment('Id do Representante');
			$table->string('rep_nome', 100)->nullable()->comment('Nome do Representante');
			$table->integer('pro_id')->nullable()->comment('Id do Projeto');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drepre');
	}

}

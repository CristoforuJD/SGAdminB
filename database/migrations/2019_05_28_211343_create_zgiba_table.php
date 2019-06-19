<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZgibaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zgiba', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('codigo')->nullable();
			$table->string('nome', 100)->nullable();
			$table->dateTime('dtsis')->nullable()->default('now()');
			$table->string('nome2', 100)->nullable();
			$table->decimal('valor', 10, 0)->nullable()->default(0);
			$table->decimal('valor2', 10, 0)->nullable()->default(0);
			$table->decimal('valor3', 10, 0)->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zgiba');
	}

}

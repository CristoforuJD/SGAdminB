<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDplanodeparaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dplanodepara', function(Blueprint $table)
		{
			$table->integer('dep_id', true);
			$table->string('dep_ctacli', 100)->comment('Conta do Cliente');
			$table->integer('pro_id')->comment('Id do Projeto');
			$table->dateTime('dep_dtsis')->nullable()->default('now()')->comment('Dt e Hr Sistema');
			$table->integer('pla_id');
			$table->integer('usu_id')->nullable();
			$table->unique(['pro_id','dep_ctacli'], 'uk_dplanodepara');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dplanodepara');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDdfcFormapagoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ddfc_formapago', function(Blueprint $table)
		{
			$table->integer('for_id', true);
			$table->string('for_nome', 100);
			$table->string('for_ativo', 1)->nullable()->default('S');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ddfc_formapago');
	}

}

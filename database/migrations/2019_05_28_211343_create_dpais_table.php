<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDpaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dpais', function(Blueprint $table)
		{
			$table->integer('pai_id', true)->comment('Id do pais');
			$table->string('pai_nome', 100)->nullable()->comment('Nome do pais');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dpais');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFdocfunTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fdocfun', function(Blueprint $table)
		{
			$table->integer('doc_id', true)->comment('Id sequencial');
			$table->string('doc_desc', 100)->nullable()->comment('Descricao do documento');
			$table->text('doc_imagem')->nullable()->comment('Imagem do documento');
			$table->integer('fun_id')->nullable()->comment('Id do funcionario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fdocfun');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDperfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dperfil', function(Blueprint $table)
		{
			$table->integer('per_id', true)->comment('Id do perfil');
			$table->string('per_nome', 50)->comment('Nome do perfil');
			$table->string('per_ativo', 1)->nullable()->default('S')->comment('Ativo S ou N');
			$table->dateTime('per_dtsis')->nullable()->default('now()')->comment('Data e hora inserção');
			$table->unique(['per_nome','per_ativo'], 'uk_dperfil');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dperfil');
	}

}

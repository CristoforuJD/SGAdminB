<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFperforTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fperfor', function(Blueprint $table)
		{
			$table->integer('pfo_id', true)->comment('Id sequencial');
			$table->integer('per_id')->comment('Id do perfil');
			$table->integer('for_id')->comment('Id do formulario');
			$table->dateTime('pfo_dtsis')->nullable()->comment('Data e hora do sistema');
			$table->unique(['per_id','for_id'], 'uk_fperfor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fperfor');
	}

}

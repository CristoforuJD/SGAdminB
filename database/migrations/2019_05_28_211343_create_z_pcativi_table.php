<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZPcativiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_pcativi', function(Blueprint $table)
		{
			$table->integer('codativ')->comment('Código atividade.');
			$table->string('ramo', 40)->comment('Ramo.');
			$table->decimal('percdesc', 10, 0)->nullable()->comment('Percentual de desconto.');
			$table->string('codcp', 6)->nullable()->comment('Código CP.');
			$table->integer('codcategoriakraft')->nullable()->comment('Código categoria KRAFT.');
			$table->integer('codramonestle')->nullable()->comment('Código ramo Nestle.');
			$table->string('codcategoriabaudu', 10)->nullable()->comment('Código Categoria BAUDU.');
			$table->string('atacadista', 1)->nullable()->default('N')->comment('Campo para identificação se o ramo de atividade é atacadista ou não.');
			$table->string('cor', 30)->nullable()->comment('Cor.');
			$table->integer('codativprinc')->nullable()->comment('Indica o código do ramo de atividade principal..');
			$table->decimal('percredaliqipi', 10, 0)->nullable()->default(0)->comment('Percentual de Redução da Alíquota de IPI');
			$table->string('calculast', 1)->nullable()->default('S')->comment('Define se irá calcular ST ou não para o ramo de atividade');
			$table->string('catvarejodori', 5)->nullable()->comment('Categoria do varejo para integração com DORI');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_pcativi');
	}

}

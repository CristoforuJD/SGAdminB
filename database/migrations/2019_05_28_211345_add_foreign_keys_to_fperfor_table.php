<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFperforTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fperfor', function(Blueprint $table)
		{
			$table->foreign('for_id', 'fk_fperfor_dforms')->references('for_id')->on('dforms')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('per_id', 'fk_fperfor_dperfil')->references('per_id')->on('dperfil')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fperfor', function(Blueprint $table)
		{
			$table->dropForeign('fk_fperfor_dforms');
			$table->dropForeign('fk_fperfor_dperfil');
		});
	}

}

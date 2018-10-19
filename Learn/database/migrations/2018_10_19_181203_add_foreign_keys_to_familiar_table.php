<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFamiliarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('familiar', function(Blueprint $table)
		{
			$table->foreign('morada_id_morada', 'fk_familiar_morada1')->references('id_morada')->on('morada')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pessoa_perdida_id_pessoa_perdida', 'fk_familiar_pessoa_perdida1')->references('id_pessoa_perdida')->on('pessoa_perdida')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('familiar', function(Blueprint $table)
		{
			$table->dropForeign('fk_familiar_morada1');
			$table->dropForeign('fk_familiar_pessoa_perdida1');
		});
	}

}

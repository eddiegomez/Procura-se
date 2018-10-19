<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResponsavelCentroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('responsavel_centro', function(Blueprint $table)
		{
			$table->foreign('id_centro', 'fk_responsavel_centro_centro_acolhimento1')->references('id_centro')->on('centro_acolhimento')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_morada', 'fk_responsavel_centro_morada1')->references('id_morada')->on('morada')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_usuario', 'fk_responsavel_centro_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('responsavel_centro', function(Blueprint $table)
		{
			$table->dropForeign('fk_responsavel_centro_centro_acolhimento1');
			$table->dropForeign('fk_responsavel_centro_morada1');
			$table->dropForeign('fk_responsavel_centro_usuario1');
		});
	}

}

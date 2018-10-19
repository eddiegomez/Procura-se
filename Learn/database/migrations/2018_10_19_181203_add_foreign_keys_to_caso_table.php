<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('caso', function(Blueprint $table)
		{
			$table->foreign('id_localizacao', 'fk_caso_Localizacao1')->references('id_localizacao')->on('localizacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_pessoa_ajuda', 'fk_caso_pessoa_ajuda1')->references('id_pessoa_ajuda')->on('pessoa_ajuda')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_pessoa_perdida', 'fk_caso_pessoa_perdida')->references('id_pessoa_perdida')->on('pessoa_perdida')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('caso', function(Blueprint $table)
		{
			$table->dropForeign('fk_caso_Localizacao1');
			$table->dropForeign('fk_caso_pessoa_ajuda1');
			$table->dropForeign('fk_caso_pessoa_perdida');
		});
	}

}

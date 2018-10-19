<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCentroAcolhimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('centro_acolhimento', function(Blueprint $table)
		{
			$table->foreign('id_localizacao', 'fk_centro_acolhimento_Localizacao1')->references('id_localizacao')->on('localizacao')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('centro_acolhimento', function(Blueprint $table)
		{
			$table->dropForeign('fk_centro_acolhimento_Localizacao1');
		});
	}

}

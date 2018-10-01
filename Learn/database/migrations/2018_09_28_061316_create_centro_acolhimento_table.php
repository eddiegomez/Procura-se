<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCentroAcolhimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centro_acolhimento', function(Blueprint $table)
		{
			$table->integer('id_centro', true);
			$table->string('designacao', 45)->nullable();
			$table->string('tipo', 45)->nullable();
			$table->integer('id_localizacao')->index('fk_centro_acolhimento_Localizacao1_idx');
			$table->primary(['id_centro','id_localizacao']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('centro_acolhimento');
	}

}

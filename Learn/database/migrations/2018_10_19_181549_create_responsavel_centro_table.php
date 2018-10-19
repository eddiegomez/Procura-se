<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResponsavelCentroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('responsavel_centro', function(Blueprint $table)
		{
			$table->integer('id_responsavel', true);
			$table->string('nome', 45)->nullable();
			$table->date('data_nasc')->nullable();
			$table->integer('contacto')->nullable();
			$table->integer('id_usuario')->index('fk_responsavel_centro_usuario1_idx');
			$table->integer('id_centro')->index('fk_responsavel_centro_centro_acolhimento1_idx');
			$table->integer('id_morada')->index('fk_responsavel_centro_morada1_idx');
			$table->primary(['id_responsavel','id_usuario','id_centro','id_morada']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('responsavel_centro');
	}

}

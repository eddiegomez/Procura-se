<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caso', function(Blueprint $table)
		{
			$table->integer('id_caso', true);
			$table->date('data_ocorrencia')->nullable();
			$table->integer('id_pessoa_perdida')->index('fk_caso_pessoa_perdida_idx');
			$table->integer('id_pessoa_ajuda')->index('fk_caso_pessoa_ajuda1_idx');
			$table->integer('id_localizacao')->index('fk_caso_Localizacao1_idx');
			$table->primary(['id_caso','id_pessoa_perdida','id_pessoa_ajuda','id_localizacao']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caso');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaAjudaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa_ajuda', function(Blueprint $table)
		{
			$table->integer('id_pessoa_ajuda', true);
			$table->string('nome', 45)->nullable();
			$table->char('sexo', 1)->nullable();
			$table->date('data_nasc')->nullable();
			$table->string('morada', 45)->nullable();
			$table->integer('telefone')->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('id_usuario')->index('fk_pessoa_ajuda_usuario1_idx');
			$table->integer('id_morada')->index('fk_pessoa_ajuda_morada1_idx');
			$table->primary(['id_pessoa_ajuda','id_usuario','id_morada']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoa_ajuda');
	}

}

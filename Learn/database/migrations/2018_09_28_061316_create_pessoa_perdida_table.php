<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaPerdidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa_perdida', function(Blueprint $table)
		{
			$table->integer('id_pessoa_perdida', true);
			$table->string('nome', 45)->nullable();
			$table->char('sexo', 1)->nullable();
			$table->date('data_nasc')->nullable();
			$table->string('nome_responsavel', 45)->nullable();
			$table->string('nacionalidade', 45)->nullable();
			$table->string('morada', 45)->nullable();
			$table->string('foto', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoa_perdida');
	}

}
